<?php

namespace App\Library;

use Exception;
use PDO;
use PDOStatement;

class Sql
{
    private static $conn = null;

    /**
     * Crea una conexión con la base de datos.
     *
     * @return PDO objeto PDO que contiene la conexión con la base de datos
     */
    public static function getPDO(): PDO
    {
        if (self::$conn === null) {
            $dataBase = $_ENV['DB_DATABASE'];
            $port = $_ENV['DB_PORT'] ?? 5432;
            self::$conn = new PDO("pgsql:host={$_ENV['DB_HOST']};port=$port;dbname=$dataBase", $_ENV['DB_USER'], $_ENV['DB_PASS']);
        }

        return self::$conn;
    }

    /**
     * Revisa una cadena de texto realizando sustituciones de caracteres especiales.
     *
     * @param string $text texto que analizamos
     *
     * @return string texto adaptado para una sentencia SQL
     */
    public static function parseText(string $text): string
    {
        $search = ["'", '\\', "\0"];
        $replace = ["''", '\\\\', '\\0'];

        return str_replace($search, $replace, $text);
    }

    /**
     * Revisa una cadena de texto realizando sustituciones de caracteres especiales
     * para utilizarla en una sentencia con LIKE.
     * <p>Además, sustituye los espacios por porcentajes</p>.
     *
     * @param string $text texto que analizamos
     *
     * @return string texto adaptado para una búsqueda tipo 'LIKE' en una sentencia SQL
     */
    public static function parseTextLike(string $text): string
    {
        return str_replace(' ', '%', self::parseText($text));
    }

    /**
     * Revisa una cadena de texto realizando sustituciones de caracteres especiales
     * para utilizarla en una sentencia con LIKE.
     *
     * @param string $text        Texto que analizamos
     * @param bool   $apostrophes Indica si la función envuelve el texto en apóstrofes
     *
     * @return string texto adaptado para una búsqueda tipo 'LIKE' en una sentencia SQL
     */
    public static function like(string $text, bool $apostrophes = false): string
    {
        $txtLike = '%'.self::parseTextLike(trim($text)).'%';

        return $apostrophes ? "'$txtLike'" : $txtLike;
    }

    /**
     * Revisa una cadena de texto realizando sustituciones de caracteres especiales
     * para utilizarla en una sentencia con LIKE.
     * La cadena que devuelve sólo busca por el principio.
     *
     * @param string $text        Texto que analizamos
     * @param bool   $apostrophes Indica si la función envuelve el texto en apóstrofes
     *
     * @return string texto adaptado para una búsqueda tipo 'LIKE' en una sentencia SQL
     */
    public static function likeStart(string $text, bool $apostrophes = false): string
    {
        $txtLike = self::parseText(trim($text)).'%';

        return $apostrophes ? "'$txtLike'" : $txtLike;
    }

    private static function getStmt(string $sql, array $sqlParams = null): PDOStatement
    {
        $conn = self::getPDO();
        if (!$sqlParams) {
            $stmt = $conn->query($sql);
        } else {
            $stmt = $conn->prepare($sql);
            SqlParam::bindValues($stmt, $sqlParams);
            $stmt->execute();
        }

        if (!$stmt) {
            exit(self::debugQuerySQL($sql, $sqlParams));
        } elseif (self::sqlError($stmt)) {
            exit(self::debugQuerySQL($sql, $sqlParams));
        }

        return $stmt;
    }

    /**
     * Ejecuta una sentencia SQL que devuelve un valor.
     *
     * @param string     $sql       sentencia SQL que vamos a ejecutar
     * @param array|null $sqlParams Parámetros de la sentencia SQL
     *
     * @return mixed valor que devuelve la consulta SQL, o null si hay algún problema o no se encuentra el valor
     */
    public static function selectEscalar(string $sql, array $sqlParams = null)
    {
        return self::getStmt($sql, $sqlParams)->fetchColumn();
    }

    /**
     * Ejecuta una sentencia SQL que devuelve una cadena de texto.
     *
     * @param string     $sql       sentencia SQL que vamos a ejecutar
     * @param array|null $sqlParams Parámetros de la sentencia SQL
     *
     * @return string cadena de texto que devuelve la consulta SQL, o una cadena vacía si hay algun problema o no se encuentra el valor
     */
    public static function selectString(string $sql, array $sqlParams = null): string
    {
        $valor = self::selectEscalar($sql, $sqlParams) ?? '';

        return trim($valor);
    }

    /**
     * Ejecuta una sentencia que devuelve múltiples valores.
     *
     * @param string     $sql       sentencia SQL que vamos a ejecutar
     * @param array|null $sqlParams Parámetros de la sentencia SQL
     *
     * @return mixed datos devueltos por la consulta SQL, o false si hay algún problema
     */
    public static function select(string $sql, array $sqlParams = null)
    {
        return self::getStmt($sql, $sqlParams)->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Ejecuta una sentencia SQL y devuelve todos los valores como array.
     *
     * @param string     $sql       Sentencia SQL que vamos a ejecutar
     * @param array|null $sqlParams Parámetros de la sentencia SQL
     */
    public static function selectAll(string $sql, array $sqlParams = null): array
    {
        return self::getStmt($sql, $sqlParams)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function selectArray(string $sql, array $sqlParams = null): array
    {
        $array = [];
        $stmt = self::getStmt($sql, $sqlParams);
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $array[$row[0]] = $row[1];
        }

        return $array;
    }

    public static function selectArrayOneField(string $sql, array $sqlParams = null): array
    {
        $array = [];
        $stmt = self::getStmt($sql, $sqlParams);
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $array[] = $row[0];
        }

        return $array;
    }

    public static function selectObject(string $sql, array $sqlParams = null)
    {
        return self::getStmt($sql, $sqlParams)->fetchObject();
    }

    /**
     * Ejecuta una sentencia SQL que no devuelve valor.
     *
     * @param string     $sql       sentencia SQL que vamos a ejecutar
     * @param array|null $sqlParams array (o valor único) de parámetros que sustituyen los 'placeholders' $1, $2, etc
     *
     * @return bool valor que indica si la sentencia se ha ejecutado con éxito
     */
    public static function execute(string $sql, array $sqlParams = null): bool
    {
        if (!empty($sql)) {
            $stmt = self::getStmt($sql, $sqlParams);

            return !self::sqlError($stmt);
        }

        return false;
    }

    /**
     * Ejecuta varias sentencias SQL.
     *
     * @param array $arraySql array de sentencias SQL que vamos a ejecutar
     */
    public static function executeMultiple(array $arraySql): void
    {
        $conn = self::getPDO();
        foreach ($arraySql as $sql) {
            if (!empty($sql)) {
                $conn->exec($sql);
            }
        }
    }

    public static function blobSave(string $rutaFichero, int $oid = 0): int
    {
        $conn = self::getPDO();
        self::blobDelete($oid);
        $conn->beginTransaction();
        $oid = $conn->pgsqlLOBCreate();
        $flujo = $conn->pgsqlLOBOpen($oid, 'w');
        $local = fopen($rutaFichero, 'rb');
        stream_copy_to_stream($local, $flujo);
        $conn->commit();

        return (int) $oid;
    }

    public static function blobDelete(int $oid): void
    {
        if ($oid !== 0) {
            $conn = self::getPDO();
            $conn->beginTransaction();
            $conn->pgsqlLOBUnlink($oid);
            $conn->commit();
        }
    }

    public static function blobRead(string $rutaFichero, int $oid): bool
    {
        $conn = self::getPDO();
        $conn->beginTransaction();
        $stream = $conn->pgsqlLOBOpen($oid, 'r');
        if ($stream !== false) {
            $local = fopen($rutaFichero, 'wb');
            stream_copy_to_stream($stream, $local);
            $conn->commit();
            fflush($local);
            fclose($local);
        } else {
            $conn->commit();

            return false;
        }

        return true;
    }

    public static function blobReadData($oid)
    {
        $conn = self::getPDO();
        $conn->beginTransaction();
        $stream = $conn->pgsqlLOBOpen($oid, 'r');
        $data = stream_get_contents($stream);
        $conn->commit();

        return $data;
    }

    public static function sqlError(PDOStatement $stmt): bool
    {
        $codigo = $stmt->errorCode();

        return !empty($codigo) && $codigo !== '00000';
    }

    /**
     * Ejecuta una sentencia SQL y devuelve una página html con el contenido de la consulta,
     * sustituyendo los parámetros por sus valores.
     *
     * @param string $sql Sentencia SQL que ejecutamos
     * @param array|null $arrayParametros Array de parámetros de la consulta SQL
     * @return string
     */
    public static function debugQuerySQL(string $sql, array $arrayParametros = null): string
    {
        $conexion = self::getPDO();
        $sth = $conexion->prepare($sql);
        if (!empty($arrayParametros)) {
            SqlParam::bindValues($sth, $arrayParametros);
        }
        $sth->execute();
        return self::debugQuery($sth, $arrayParametros);
    }

    /**
     * Procesa u objeto PDOStatement, parsea los parámetros sustityéndolos por sus valores y
     * devuelve una página HTML que muestra la consulta.
     * (http://stackoverflow.com/questions/7716785/get-last-executed-query-in-php-pdo).
     *
     * @param PDOStatement $statement Objeto que utilizamos para realizar la consulta SQL
     * @param array|null $arrayParams Array de parámetros de la consulta SQL
     * @return string
     */
    public static function debugQuery(PDOStatement $statement, array $arrayParams = null): string
    {
        $numParams = $arrayParams ? count($arrayParams) : 0;

        /* $paramName contiene el nombre del parámetro con dos puntos ([0]) y sin ellos ([1]) */
        $fnReplace = static function ($paramName) use ($numParams, $arrayParams) {
            $value = null;
            $dbType = PDO::PARAM_NULL;
            // Buscamos el parámetro
            for ($i = 0; $i < $numParams; ++$i) {
                if ($arrayParams[$i]->name === $paramName[0]) {
                    $value = $arrayParams[$i]->value;
                    $dbType = $arrayParams[$i]->dbType;
                    break;
                }
            }

            if ($value === null) {
                $value = 'null';
            } elseif ($dbType === PDO::PARAM_BOOL) {
                $value = Tools::toBool($value) ? 'true' : 'false';
            } elseif ($dbType === PDO::PARAM_STR) {
                $value = "'".Sql::parseText($value)."'";
            } elseif ($dbType === PDO::PARAM_INT) {
                $value = (int) $value;
            } elseif (!is_numeric($value)) {
                $value = "'".Sql::parseText($value)."'";
            }

            return $value;
        };

        $sqlExpanded = preg_replace_callback('/:([0-9a-z_]+)/i', $fnReplace, $statement->queryString);
        $exception = new Exception();
        $callStack = str_replace("\n", '<br>', $exception->getTraceAsString());
        unset($exception);

        $err = $statement->errorInfo();

        if (PHP_SAPI === 'cli') {
            $eol = PHP_EOL;
            $callStackTxt = str_replace('<br>', PHP_EOL, $callStack);

            return <<<EOT
                ERROR SQL   $err[0]
                $eol
                Driver code $err[1]
                $eol
                Mensaje     $err[2]
                $eol$eol
                $sqlExpanded
                $eol$eol
                $callStackTxt
                $eol
                EOT;
        }

        return  <<<EOT
            <!DOCTYPE html><html lang="es">
            <head><title></title><meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
            <style>
             body {border: 2px solid red; padding: 20px;}
             ul {list-style-type: none; padding-left: 0;}
             ul li span {float: left; width: 100px; font-weight:bold;}
             p.sql {max-width:90%; word-wrap: break-word; font-family: 'Courier New',monospace; font-size: .8em;}
            </style>
            </head>
            <body>
            <h1>Error SQL</h1>
            <ul>
            <li><span>SQLSTATE</span>$err[0]</li>
            <li><span>Driver code</span>$err[1]</li>
            <li><span>Mensaje</span>$err[2]</li>
            </ul>
            <hr><h2>Sentencia SQL</h2><p class='sql'>$sqlExpanded</p>
            <hr><h2>Call stack</h2><p class='sql'>$callStack</p>
            </body></html>
            EOT;
    }
}
