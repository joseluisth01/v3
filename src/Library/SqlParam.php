<?php

namespace App\Library;

use DateTime;
use PDO;
use PDOStatement;

/**
 * Define un parámetro para una consulta SQL que utiliza PDO.
 * La clase contiene un métodos estáticos que permite asociar un array de parámetros a un objeto de tipo PDOStatement.
 */
class SqlParam
{
    /**
     * nombre del parámetro.
     *
     * @var string
     */
    public string $name;

    /**
     * valor del parámetro.
     *
     * @var mixed
     */
    public $value;

    /**
     * Tipo de valor que representa el parámetro.
     * El valor es uno de las constantes PDO::PARAM_* definidas en la clase PDO.
     *
     * @var int
     */
    public int $dbType;

    /**
     * Crea una instancia de la clase SqlParam.
     *
     * @param string $name name del parámetro en la sentencia SQL.
     *                                El name del parámetro podrá ir precedido o no pos dos puntos.
     *                                El constructor creará el parámetro precediendo el name por dos puntos.
     * @param mixed $value value del parámetro
     * @param mixed $fieldType Tipo de campo.
     *                                Este parámetro puede recibir una cadena de texto;
     *                                en este caso, los tipos corresponderán a los que define PHP en la función settype()
     *                                [http://php.net/manual/es/function.settype.php].
     *                                El otro tipo de value que puede recibir es una de las constantes PDO::PARAM_* definidas en la clase PDO.
     * @param int $strLength longitud máxima del texto en caso de que el parámetro sea una cadena de texto
     */
    public function __construct(string $name, $value, $fieldType = null, int $strLength = 0)
    {
        if (mb_strpos($name, ':') !== 0) {
            $name = ":$name";
        }

        $this->name = $name;
        $this->dbType = self::dbType($fieldType);
        $this->value = $this->formatVal($value, $fieldType);

        if ($this->dbType === PDO::PARAM_BOOL) {
            $this->value = Tools::toBool($this->value);
        } elseif ($this->dbType === PDO::PARAM_STR && $strLength > 0 && mb_strlen($this->value) > $strLength) {
            $this->value = mb_substr($this->value, 0, $strLength);
        }

        if ($this->dbType === PDO::PARAM_NULL && is_string($value) && str_contains($value, 'CURRENT_')) {
            $fecha = new DateTime();
            if (str_contains($value, 'CURRENT_TIM')) {
                $this->value = $this->formatVal($fecha, 'time');
            } else {
                $this->value = $this->formatVal($fecha);
            }
        }

        if ($this->value === '' && ($fieldType === '\DateTime' || $fieldType === 'DateTime' || $fieldType === 'time')) {
            $this->value = null;
        }
    }

    private function formatVal($value, $fieldType = null)
    {
        if ($value instanceof DateTime) {
            if ($fieldType === 'time') {
                $value = $value->format('Y-m-d H:i:s');
            } else {
                $value = $value->format('Y-m-d');
            }
        } elseif (\is_string($value)) {
            $value = html_entity_decode($value);
        }

        if ($this->dbType === PDO::PARAM_INT) {
            $value = Tools::toInt($value);
        } elseif ($fieldType === 'float') {
            $value = Tools::toFloat($value);
        } elseif ($this->dbType === PDO::PARAM_STR) {
            $regExp = "/^([a-z0-9+_\-áéíóúAÉÍÓÚÑñ]+)(\.[a-z0-9+_\-áéíóúAÉÍÓÚÑñ]+)*@"
                . "([a-z0-9\-áéíóúAÉÍÓÚÑñ]+\.)+[a-z]{2,6}$/ixu";
            $esEmail = preg_match($regExp, $value);
            if ($esEmail) {
                $value = mb_strtolower($value, 'utf-8');
            }
        }

        return $value;
    }

    /**
     * Devuelve el tipo PDO que corresponde al tipo de value que indica el parámetro.
     * @param string|int $fieldType texto que contiene el tipo de campo que traducimos a la constante PDO
     * @return int value que indica el tipo de dato PDO al que corresponde el campo
     */
    public static function dbType($fieldType): int
    {
        if (is_int($fieldType)) {
            return $fieldType;
        }

        if ($fieldType === 'int') {
            $dbType = PDO::PARAM_INT;
        } elseif ($fieldType === 'string') {
            $dbType = PDO::PARAM_STR;
        } elseif ($fieldType === 'bool') {
            $dbType = PDO::PARAM_BOOL;
        } else {
            $dbType = PDO::PARAM_NULL;
        }

        return $dbType;
    }

    /**
     * Asocia los parámetros del array que recibe al objeto PDOStatement.
     * @param PDOStatement $sth objeto que utilizamos para ejecutar una sentencia SQL
     * @param array $arrayParametros array de objetos SqlParametros que contiene los parámetros de la sentencia SQL
     */
    public static function bindValues(PDOStatement $sth, array $arrayParametros): void
    {
        if (empty($arrayParametros)) {
            return;
        }

        foreach ($arrayParametros as $p) {
            if ($p instanceof self) {
                if ($p->dbType === PDO::PARAM_NULL) {
                    $sth->bindValue($p->name, $p->value);
                } else {
                    $sth->bindValue($p->name, $p->value, $p->dbType);
                }
            }
        }
    }
    public static function createParam($name, $value, $type): ?SqlParam
    {
        if ($type === PDO::PARAM_INT) {
            $value = (int)$value;
        }

        if (empty($value)) {
            return null;
        }

        if (!str_contains($name, ':')) {
            $name = ":$name";
        }

        if ($type === 'DateTime') {
            $fecha = Tools::toDate($value);
            if ($fecha === null) {
                return null;
            }
            $value = date_format($fecha, 'Y-m-d');
        }

        return new SqlParam($name, $value, $type);
    }
}
