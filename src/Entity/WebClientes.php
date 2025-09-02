<?php

namespace App\Entity;

use App\Library\Sql;
use App\Library\SqlOrm;
use App\Library\SqlParam;
use App\Library\Tools;

class WebClientes extends SqlOrm
{
    /** @var int */
    public $codigo;
    /** @var string */
    public $nombre;
    /** @var string */
    public $apellido1;
    /** @var string */
    public $apellido2;
    /** @var string */
    public $cif;
    /** @var string */
    public $tipofiscal;
    /** @var string */
    public $direccion;
    /** @var string */
    public $localidad;
    /** @var string */
    public $cpostal;
    /** @var int */
    public $provincia;
    /** @var string */
    public $email;
    /** @var string */
    public $telefono;
    /** @var string */
    public $clave;
    /** @var \DateTime */
    public $created_at;
    /** @var string */
    public $session_id;

    public function __construct()
    {
        parent::__construct();
        $this->fields = ['codigo', 'nombre', 'apellido1', 'apellido2', 'cif', 'tipofiscal', 'direccion', 'localidad', 'cpostal', 'provincia', 'email', 'telefono', 'clave', 'created_at', 'session_id'];
        $this->fieldTypes = ['string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'string', 'int', 'string', 'string', 'string', 'time', 'string'];
        $this->fieldLengths = [0, 80, 50, 50, 15, 1, 80, 50, 20, 0, 70, 15, 0, 0, 0];
        $this->defaultValues = [null, '', '', '', '', 'F', '', '', '', 0, '', '', '', 'now', ''];
        $this->numFields = 15;
        $this->tableName = 'web_clientes';
        $this->pkFields = ['codigo'];
        $this->numPkFields = 1;
        $this->calcCodeNewReg = true;
        $this->autoIncrementField = 'codigo';

        if (func_num_args() > 0) {
            $this->selectPK(func_get_args());
        } else {
            $this->clearFields();
        }
    }

    public function mustInsert(): bool
    {
        $sql = 'SELECT exists(SELECT 1 FROM web_clientes WHERE '.$this->sqlPKCondition().')';
        $param[] = new SqlParam('codigo', $this->codigo, 'string');

        return !Tools::toBool($this->selectEscalar($sql, $param));
    }

    // -- END generated code --
    public function nombreCompleto(): string
    {
        return trim($this->nombre.' '.$this->apellido1.' '.$this->apellido2);
    }

    public function nombreProvincia(): string
    {
        return Sql::selectString("SELECT nombre FROM provincias WHERE codigo = $this->provincia");
    }

    public function grabaCliente(int $tarifa): Clientes
    {
        $cli = new Clientes();

        $cli->nombre = $this->nombre;
        $cli->apellido1 = $this->apellido1;
        $cli->apellido2 = $this->apellido2;
        $cli->cif = $this->cif;
        $cli->tipofiscal = $this->tipofiscal;
        $cli->direccion = $this->direccion;
        $cli->localidad = $this->localidad;
        $cli->cpostal = $this->cpostal;
        $cli->provincia = $this->provincia;
        $cli->email = $this->email;
        $cli->telefono1 = $this->telefono;
        $cli->fpago = 1;
        $cli->tarifabase = $tarifa;
        $cli->insert();

        $cli->actualizaPassword($this->clave);

        return $cli;
    }
}
