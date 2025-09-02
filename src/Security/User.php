<?php

namespace App\Security;

use App\Library\Sql;
use App\Library\SqlParam;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    private $codigo = 0;
    private $username;
    private $password;
    private $isAdmin;
    private $isClient;
    private $email;
    private $almacen;
    private $tarifa;
    private $hasRecargo;
    /** @var int Si es cliente, su código, si es usuario, el código de un cliente seleccionado */
    private $cliente = 0;
    private $clientName;
    private $webResetPassword = false;
    private $agente;
    private $roles = [];



    public function getId(): int
    {
        return $this->codigo;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    public function isAdmin(): bool
    {
        return (bool) $this->isAdmin;
    }

    public function isClient(): bool
    {
        return (bool) $this->isClient;
    }

    public function hasRecargo(): bool
    {
        return (bool) $this->hasRecargo;
    }

    public function getEmail(): string
    {
        return (string) $this->email;
    }

    public function getAlmacen(): int
    {
        return (int) $this->almacen;
    }

    public function getAgente(): int
    {
        return (int) $this->agente;
    }

    public function getTarifa(): int
    {
        return (int) $this->tarifa;
    }

    public function getClient(): int
    {
        return $this->cliente;
    }

    public function getClientName(): string
    {
        return (string) $this->clientName;
    }

    public function getWebResetPassword(): bool
    {
        return $this->webResetPassword;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        if ($this->isAdmin) {
            $roles[] = 'ROLE_ADMIN';
            $roles[] = 'ROLE_ALLOWED_TO_SWITCH';
        }

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;  // not needed for apps that do not check user passwords
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function setClient(int $cliente, SessionInterface $session, bool $actualizaLineas = true)
    {
        $this->cliente = $cliente;
        $this->clientName = Sql::selectString("SELECT trim(nombre||' '||apellido1||' '||apellido2) FROM clientes WHERE codigo = {$cliente}");
        $this->tarifa = (int) Sql::selectEscalar("SELECT tarifabase FROM clientes WHERE codigo = {$cliente}");

        if ($actualizaLineas) {
            // Si tiene líneas en el carrito, las asociamos al cliente
            $params1 = [
                new SqlParam('cliente', $cliente, 'int'),
                new SqlParam('old_session_id', $session->get('user_session_id'), 'string'),
            ];
            Sql::execute('UPDATE web_lineas_pedidos SET cliente = :cliente WHERE session_id = :old_session_id', $params1);
        }

        // Si el cliente tiene líneas de otra sesión, las asociamos a la sesión actual
        $params2 = [
                new SqlParam('cliente', $cliente, 'int'),
                new SqlParam('new_session_id', $session->getId(), 'string'),
            ];
        Sql::execute('UPDATE web_lineas_pedidos SET session_id = :new_session_id WHERE cliente = :cliente', $params2);

        $session->set('user_session_id', $session->getId());
    }

    public static function findUserByName($usuario, $clave, KernelInterface $appKernel): ?User
    {
        $filtroSql = 'upper(identificador) = upper(:identificador) AND clave = md5(:pass)';
        $params = [new SqlParam('identificador', $usuario), new SqlParam('pass', $clave)];
        $user = self::findUser($filtroSql, $params);

        if ($user === null) {
            $config = new \App\Service\ConfigService($appKernel);
            if (isset($_ENV['CLIENT_OLD_PASSWORD']) && $_ENV['CLIENT_OLD_PASSWORD'] == 'true') {
                if ($config->clienteAccesoEmail()) {
                    $filtroSql = 'OR upper(email) = :usuario AND passwordweb = md5(:pass)';
                } else {
                    $filtroSql = '(upper(cif) = :usuario OR upper(email) = :usuario) AND passwordweb = md5(:pass)';
                }
                $param = [new SqlParam('usuario', mb_strtoupper($usuario)), new SqlParam('pass', $clave)];
                $user = self::findClient($filtroSql, $param);
            } else {
                if ($config->clienteAccesoEmail()) {
                    $sql = 'SELECT codigo, clave FROM clientes WHERE upper(email) = :usuario';
                } else {
                    $sql = 'SELECT codigo, clave FROM clientes WHERE (upper(cif) = :usuario OR upper(email) = :usuario)';
                }
                $param = [new SqlParam('usuario', mb_strtoupper($usuario))];
                $clients = Sql::selectAll($sql, $param);
                foreach ($clients as $cli) {
                    if (password_verify($clave, $cli['clave'])) {
                        $param = [new SqlParam('codigo', (int) $cli['codigo'], 'int')];
                        $user = self::findClient('codigo = :codigo', $param);
                        break;
                    }
                }
            }
        }
        return $user;
    }

    public static function loadUserByIdentifier($id): ?User
    {
        $parts = explode('-', $id);
        if (count($parts) == 2) {
            $filtroSql = 'codigo = '.(int) $parts[1];
            if ($parts[0] == 'U') {
                return self::findUser($filtroSql);
            } else {
                return self::findClient($filtroSql);
            }
        }

        return null;
    }

    private static function findUser(string $filtroSql, array $params = null): ?User
    {
        $sql = "SELECT
            codigo,
            trim(nombre||' '||apellidos) AS nombre,
            clave as pass,
            adminweb,
            email,
            almacen,
            codigoagente AS agente,
            0 AS tarifa,
            false AS recargo
            FROM usuarios
            WHERE {$filtroSql}";
        $datos = Sql::select($sql, $params);

        return self::createUser(false, $datos);
    }

    public static function findClient(string $filtroSql, array $params = null): ?User
    {
        if (isset($_ENV['CLIENT_OLD_PASSWORD']) && $_ENV['CLIENT_OLD_PASSWORD'] == 'true') {
            $campoClave = 'passwordweb';
        } else {
            $campoClave = 'clave';
        }

        $filtroSql .= " AND activo AND (expira_el IS NULL OR (expira_el IS NOT NULL AND expira_el > CURRENT_DATE))";

        $sql = "SELECT
            codigo,
            trim(nombre||' '||apellido1||' '||apellido2) AS nombre,
            $campoClave AS pass,
            false AS adminweb,
            email,
            0 AS almacen,
            0 AS agente,
            tarifabase AS tarifa,
            recargo != 0 AS recargo,
            web_reset_password
            FROM clientes
            WHERE {$filtroSql}";
        $datos = Sql::select($sql, $params);

        return self::createUser(true, $datos);
    }

    private static function createUser($isClient, $datos): ?User
    {
        if (empty($datos)) {
            return null;
        }

        $codigo = (int) $datos['codigo'];

        $user = new self();
        $user->codigo = $codigo;
        $user->username = $datos['nombre'];
        $user->password = $datos['pass'];
        $user->isAdmin = (bool) $datos['adminweb'];
        $user->isClient = $isClient;
        $user->almacen = (int) $datos['almacen'];
        $user->agente = (int) $datos['agente'];
        $user->tarifa = (int) $datos['tarifa'];
        $user->email = $datos['email'];
        $user->hasRecargo = (bool) $datos['recargo'];

        if ($isClient) {
            $user->cliente = $user->codigo;
            $user->clientName = $user->username;
            $user->webResetPassword = (bool) $datos['web_reset_password'];
        }

        return $user;
    }
}
