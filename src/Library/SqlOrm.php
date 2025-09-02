<?php

namespace App\Library;

use DateTime;
use PDO;
use Symfony\Component\HttpFoundation\Session\Session;

abstract class SqlOrm
{
    /** @var int Código del usuario actual registrado en la aplicación */
    public static int $appUserCode = 0;

    /** @var bool Indica si, por defecto, grabamos los textos en mayúsculas */
    public static bool $upperDefault = false;

    /** @var array Array que contiene los nombres de los campos. */
    protected array $fields;

    /** @var int Número de campos que contiene el array. */
    protected int $numFields = 0;

    /** @var array Tipos de datos de los campos. */
    protected array $fieldTypes;

    /** @var array Longitudes de los campos de texto. */
    protected array $fieldLengths;

    /** @var array Array que contiene los iniciales de los campos. */
    protected array $defaultValues;

    /** @var array Array que contiene los campos de tipo texto que no convertimos a mayúsculas. */
    protected array $fieldsNoUpper = [];

    /** @var string Nombre de la tabla. */
    protected string $tableName;

    /** @var array Nombres de los campos que componen la clave primaria. */
    protected array $pkFields;

    /** @var int Número de campos que componen la clave primaria. */
    protected int $numPkFields = 0;

    /** @var string Nombre del campo autoincremental (si existe). */
    protected string $autoIncrementField;

    /** @var bool Indica si debemos calcular un código sumando 1 al campo de la clave primaria al insertar un registro. */
    protected bool $calcCodeNewReg = false;

    public function __construct()
    {
    }

    /**
     * Devuelve un valor de tipo <b>bool</b> que indica si el campo que recibe forma parte de la clave primaria.
     *
     * @param string $fieldName Nombre del campo que comprobamos
     *
     * @return bool <b>TRUE</b> si el campo forma parte de la clave primaria, o <b>false</b> en caso contrario
     */
    private function isPrimaryKey(string $fieldName): bool
    {
        return in_array($fieldName, $this->pkFields, true);
    }

    /**
     * Devuelve un valor de tipo <b>bool</b> que indica si el campo que recibe no debe pasar el texto a mayúsculas.
     *
     * @param string $fieldName Nombre del campo que comprobamos
     *
     * @return bool <b>true</b> si el campo no debe grabarse en mayúsculas, o <b>false</b> en caso contrario
     */
    private function isIgnoreCase(string $fieldName): bool
    {
        if (!self::$upperDefault) {
            return true;
        }

        if ($fieldName === 'created_by' || $fieldName === 'modified_by' || $fieldName === 'updated_by') {
            return true;
        }
        if (!isset($this->fieldsNoUpper)) {
            return false;
        }

        return in_array($fieldName, $this->fieldsNoUpper, true);
    }

    /**
     * Devuelve una cadena de texto que contiene la condición de filtro con el campo o los campos de la clave primaria.
     *
     * @return string Texto que contiene la condicion de filtro de la clave primaria
     */
    protected function sqlPKCondition(): string
    {
        $conditions = [];
        for ($i = 0; $i < $this->numPkFields; ++$i) {
            $field = $this->pkFields[$i];
            $conditions[] = "$field = :$field";
        }

        return implode(' AND ', $conditions);
    }

    /**
     * Lee el registro cuya clave primaria indica el parámetro.
     *
     * @param mixed $pkValues valor de la clave primaria que buscamos
     *
     * @return bool <b>TRUE</b> si encuentra el registro, o <b>false</b> en caso contrario
     */
    public function selectPK($pkValues): bool
    {
        $pkValues = is_array($pkValues) ? $pkValues : func_get_args();
        if (count($pkValues) !== $this->numPkFields) {
            return false;
        }

        $params = [];
        for ($i = 0; $i < $this->numPkFields; ++$i) {
            $fieldName = $this->pkFields[$i];
            $posField = array_search($fieldName, $this->fields, true);
            $params[] = $this->createSqlParam($fieldName, $pkValues[$i], $posField);
        }

        return $this->select($this->sqlPKCondition(), $params);
    }

    /**
     * Lee un registro de la tabla y rellena los campos del objeto con los valores devueltos por la consulta.
     *
     * @param string|null $filter      filtro que utilizamos para realizar la consulta SQL
     * @param array|null  $arrayParams Array que contiene los valores de los parámetros de la consulta
     *
     * @return bool <b>TRUE</b> si encuentra el registro, o <b>false</b> en caso contrario
     */
    public function select(string $filter = null, array $arrayParams = null): bool
    {
        $sql = $this->sqlStatement().$this->where($filter);
        $data = Sql::select($sql, $arrayParams);
        if ($data) {
            $this->setFields($data);
        } else {
            $this->clearFields();
        }

        return $data !== false;
    }

    /**
     * Devuelve la sentencia SQL que ejecutamos para leer un registro de la tabla.
     *
     * @return string Sentencia SQL que ejecutamos para leer registros de la tabla
     */
    protected function sqlStatement(): string
    {
        return 'SELECT '.implode(',', $this->fields).' FROM '.$this->tableName;
    }

    /**
     * Ejecuta una sentencia SQL que devuelve un valor.
     *
     * @param string     $sql         sentencia SQL que vamos a ejecutar
     * @param array|null $arrayParams array de parámetros que sustituyen los 'placeholders' $1, $2, etc
     *
     * @return mixed valor que devuelve la consulta SQL, o null si hay algún problema
     */
    public function selectEscalar(string $sql, array $arrayParams = null)
    {
        return Sql::selectEscalar($sql, $arrayParams);
    }

    /**
     * Asigna el código usuario de la sesión a la variable estática $appUserCode.
     */
    private function verifyAppUser()
    {
        if (self::$appUserCode === 0) {
            $session = new Session();
            self::$appUserCode = (int) $session->get('user_id');
        }
    }

    /**
     * Inserta un registro en la tabla utilizando los valores de los campos.
     *
     * @return bool <b>TRUE</b> si inserta el registro correctamente, o <b>false</b> en caso contrario
     */
    public function insert(): bool
    {
        $fieldNames = [];
        $paramNames = [];
        $arrayParams = [];
        $this->verifyAppUser();
        $this->verifyFieldValues();

        $calcNewCode = $this->calcCodeNewReg && $this->numPkFields === 1;

        for ($i = 0; $i < $this->numFields; ++$i) {
            $field = $this->fields[$i];
            if ($field === $this->autoIncrementField) {
                continue;
            }

            $fieldNames[] = $field;

            if ($field === 'created_by' || $field === 'modified_by' || $field === 'updated_by') {
                $value = self::$appUserCode;
            } elseif ($field === 'created_at' || $field === 'modified_at' || $field === 'updated_at') {
                $value = 'now()';
            } else {
                $value = $this->$field;
            }

            if ($calcNewCode && $field === $this->pkFields[0] && (int) $value === 0) {
                $paramNames[] = "(1+(SELECT coalesce(max($field), 0) FROM $this->tableName))";
            } else {
                $paramNames[] = ":$field";
                $arrayParams[] = $this->createSqlParam($field, $value, $i);
            }
        }

        $sql = "INSERT INTO $this->tableName (".implode(',', $fieldNames).') VALUES ('.implode(',', $paramNames).')';

        if ($this->numPkFields > 0) {
            $sql .= ' RETURNING '.implode(',', $this->pkFields);
        }

        $dbh = Sql::getPDO();
        $sth = $dbh->prepare($sql);
        SqlParam::bindValues($sth, $arrayParams);
        if ($sth->execute()) {
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            for ($i = 0; $i < $this->numPkFields; ++$i) {
                $field = $this->pkFields[$i];
                $this->$field = $result[$field];
            }
        } else {
            exit(Sql::debugQuerySQL($sql, $arrayParams));
        }

        return true;
    }

    /**
     * Borra el registro que indica el parámetro.
     *
     * @param mixed $pkValues Valor o array de valores de la clave primaria que utilizamos para localizar el registro
     *                        <p>Si el valor es null, utiliza el valor del campo de la clave primaria del objeto actual</p>
     *
     * @return bool <b>true</b> si borra el registro correctamente, o <b>false</b> en caso contrario
     */
    public function delete($pkValues = null): bool
    {
        $deleteOK = false;

        /* Recogemos el valor de la clave primaria */
        if ($pkValues === null) {
            for ($i = 0; $i < $this->numPkFields; ++$i) {
                $field = $this->pkFields[$i];
                $pkValues[] = $this->$field;
            }
        } elseif (!is_array($pkValues)) {
            $pkValues = [$pkValues];
        }

        $arrayParams = [];
        for ($i = 0; $i < $this->numPkFields; ++$i) {
            $field = $this->pkFields[$i];
            if (($posField = array_search($field, $this->pkFields, true)) === false) {
                return false;
            }
            $arrayParams[] = $this->createSqlParam($field, $pkValues[$i], $posField);
        }

        $filter = $this->sqlPKCondition();
        if (!empty($filter)) {
            $sql = "DELETE FROM $this->tableName WHERE $filter";
            $deleteOK = Sql::execute($sql, $arrayParams);
            if (!$deleteOK) {
                exit(Sql::debugQuerySQL($sql, $arrayParams));
            }
        }

        return $deleteOK;
    }

    /**
     * Actualiza la base de datos con los valores de los campos que recibe en el array,
     * o con los valores de los campos del objeto si algún parámetro es null.
     *
     * @param array|null $arrayFields array asociativo que contiene los nombres y valores de los campos
     *
     * @return bool <b>TRUE</b> si actualiza el registro, o <b>false</b> en caso contrario
     */
    public function update(array $arrayFields = null): bool
    {
        $this->verifyAppUser();
        if ($arrayFields !== null) {
            return $this->updateArrayFields($arrayFields);
        }

        return $this->updateClassFields();
    }

    /**
     * Actualiza la base de datos con los valores de los campos.
     *
     * @return bool <b>TRUE</b> si actualiza el registro, o <b>false</b> en caso contrario
     */
    private function updateClassFields(): bool
    {
        $fieldNames = [];
        $arrayParams = [];
        $this->verifyFieldValues();

        for ($i = 0; $i < $this->numFields; ++$i) {
            $field = $this->fields[$i];
            if ($field === 'created_by' || $field === 'created_at') {
                continue;
            }
            if ($field === 'modified_by' || $field === 'updated_by') {
                $value = self::$appUserCode;
            } elseif ($field === 'modified_at' || $field === 'updated_at') {
                $value = 'now()';
            } else {
                $value = $this->$field;
            }

            if (!$this->isPrimaryKey($field)) {
                $fieldNames[] = "$field = :$field";
            }
            $arrayParams[] = $this->createSqlParam($field, $value, $i);
        }

        if (count($fieldNames) === 0) {
            return true;
        }

        $filter = $this->sqlPKCondition();
        if ($filter) {
            $setFields = implode(',', $fieldNames);

            $sql = 'UPDATE '.$this->tableName.' SET '.$setFields.$this->where($filter);
            $updateOK = Sql::execute($sql, $arrayParams);
            if (!$updateOK) {
                exit(Sql::debugQuerySQL($sql, $arrayParams));
            }
        }

        return true;
    }

    /**
     * Actualiza la base de datos con los valores de los campos que recibe en el array.
     *
     * @param array $arrayfieldNames array que contiene los nombres de los campos que vamos a actualizar
     *
     * @return bool <b>true</b> si actualiza el registro, o <b>false</b> en caso contrario
     */
    private function updateArrayFields(array $arrayfieldNames): bool
    {
        $fieldNames = [];
        $arrayParams = [];

        foreach ($arrayfieldNames as $fieldName) {
            $i = array_search($fieldName, $this->fields, true);
            if ($i === false || $fieldName === 'created_by' || $fieldName === 'created_at') {
                continue;
            }

            if (!$this->isPrimaryKey($fieldName)) {
                $fieldNames[] = "$fieldName = :$fieldName";
            }

            $value = $this->$fieldName;
            $arrayParams[] = $this->createSqlParam($fieldName, $value, $i);
        }

        if (count($fieldNames) > 0) {
            if (!in_array('modified_by', $arrayfieldNames, true) && in_array('modified_by', $this->fields, true)) {
                $posField = array_search('modified_by', $this->fields, true);
                $fieldNames[] = 'modified_by = :modified_by';
                $arrayParams[] = $this->createSqlParam('modified_by', self::$appUserCode, $posField);
            } elseif (!in_array('updated_by', $arrayfieldNames, true) && in_array('updated_by', $this->fields, true)) {
                $posField = array_search('updated_by', $this->fields, true);
                $fieldNames[] = 'updated_by = :updated_by';
                $arrayParams[] = $this->createSqlParam('updated_by', self::$appUserCode, $posField);
            }

            if (!in_array('modified_at', $arrayfieldNames, true) && in_array('modified_at', $this->fields, true)) {
                $fieldNames[] = 'modified_at = now()';
            } elseif (!in_array('updated_at', $arrayfieldNames, true) && in_array('updated_at', $this->fields, true)) {
                $fieldNames[] = 'updated_at = now()';
            }

            $filter = $this->sqlPKCondition();
            if (!$filter) {
                return true;
            }

            for ($i = 0; $i < $this->numPkFields; ++$i) {
                $fieldName = $this->pkFields[$i];
                $posField = array_search($fieldName, $this->fields, true);
                $valCampo = $this->$fieldName;
                $arrayParams[] = $this->createSqlParam($fieldName, $valCampo, $posField);
            }

            $setFields = implode(',', $fieldNames);
            $sql = 'UPDATE '.$this->tableName.' SET  '.$setFields.$this->where($filter);
            $updateOK = Sql::execute($sql, $arrayParams);
            if (!$updateOK) {
                exit(Sql::debugQuerySQL($sql, $arrayParams));
            }
        }

        return true;
    }

    /**
     * Indica si debemos insertar o actualizar el registro actual.
     *
     * @return bool devuelve <b>TRUE</b> si debemos insertar, o <b>false</b> si debemos actualizar
     */
    abstract public function mustInsert(): bool;

    /**
     * Inserta o actualiza el registro.
     *
     * @param array|null $arrayFields Array que contiene los nombres de los campos que actualizamos (sólamante para update)
     *
     * @return bool Devuelve <b>TRUE</b> si graba el registro correctamente, o <b>false</b> en caso contrario
     */
    public function save(array $arrayFields = null): bool
    {
        if ($this->mustInsert()) {
            return $this->insert();
        }

        return $this->update($arrayFields);
    }

    /**
     * Asigna los campos utilizando un array asociativo que contiene los valores de los campos.
     *
     * @param array $arrayValues array asociativo que contiene los valores de los campos
     */
    public function setFields(array $arrayValues): void
    {
        if (empty($arrayValues)) {
            $this->clearFields();
            return;
        }

        for ($i = 0; $i < $this->numFields; ++$i) {
            $fieldName = $this->fields[$i];
            if (array_key_exists($fieldName, $arrayValues)) {
                $value = $this->valueToPHP($i, $arrayValues[$fieldName]);
                $this->$fieldName = $value;
            }
        }
    }

    /**
     * Asigna los campos del objeto actual, valores iniciales que están en el array <b>valores_iniciales</b>.
     */
    public function clearFields(): void
    {
        for ($i = 0; $i < $this->numFields; ++$i) {
            $field = $this->fields[$i];
            $this->$field = $this->defaultValues[$i];
        }
    }

    /**
     * Comprueba los valores de los campos y verifica que sean del tipo definido en $tipos_campos.
     * Si un campo es null, asigna su valor inicial.
     */
    private function verifyFieldValues(): void
    {
        for ($index = 0; $index < $this->numFields; ++$index) {
            $field = $this->fields[$index];
            $value = $this->$field;
            $this->$field = $this->valueToPHP($index, $value);
        }
    }

    /**
     * Devuelve el valor de un campo en tipo nativo de PHP ajustado según el tipo definido en $tipos_campos.
     *
     * @param int   $indiceCampo posición del campo en el array $fields
     * @param mixed $value       valor que comprobamos
     *
     * @return array|bool|DateTime|float|int|string|string[]|null Valor del campo ajustado a su tipo nativo de PHP
     */
    private function valueToPHP(int $indiceCampo, $value)
    {
        if (!is_numeric($indiceCampo)) {
            return $value;
        }

        $fieldType = $this->fieldTypes[$indiceCampo];

        if ($fieldType === 'jsonb') {
            return $value;
        }

        if ($value === null) {
            $value = $this->defaultValues[$indiceCampo];
        }

        if ($fieldType === 'string') {
            if (is_array($value)) {
                $value = '';
            }
            $value = html_entity_decode($value);
        } elseif ($fieldType === 'integer') {
            $value = Tools::toInt($value);
        } elseif ($fieldType === 'double' || $fieldType === 'float') {
            $value = Tools::toFloat($value);
        } elseif ($fieldType === 'bool') {
            $value = Tools::toBool($value);
        }

        $valueType = gettype($value);
        if ($valueType !== $fieldType) {
            $esDateTime = $fieldType === '\DateTime' || $fieldType === 'DateTime';
            if ($esDateTime || $fieldType === 'time') {
                if ($valueType === 'string') {
                    if (empty($value)) {
                        $value = $this->defaultValues[$indiceCampo];
                    } elseif ($fieldType !== 'time') {
                        $value = Tools::toDate($value);
                        if ($value) {
                            $valueType = 'object';
                        }
                    }
                }
                if ($valueType === 'object' && get_class($value) === '\DateTime') {
                    $value = date_format($value, $esDateTime ? 'Y-m-d' : 'Y-m-d H:i:s');
                }
            } else {
                if ($fieldType === 'bool' && $valueType === 'string') {
                    $value = Tools::toBool($value);
                }
                settype($value, $fieldType);
            }
        }

        if ($fieldType === 'string') {
            $value = trim($value);
            $regExp = " /^([a-z0-9\+_\-áéíóúAÉÍÓÚÑñ]+)(\.[a-z0-9\+_\-áéíóúAÉÍÓÚÑñ]+)*@([a-z0-9\-áéíóúAÉÍÓÚÑñ]+\.)+[a-z]{2,6}$/ixu";
            $esEmail = preg_match($regExp, $value);
            if ($esEmail) {
                $value = mb_strtolower($value, 'utf-8');
            } elseif (!$this->isIgnoreCase($this->fields[$indiceCampo])) {
                $value = mb_strtoupper($value, 'utf-8');
            }
        }

        return $value;
    }

    private function createSqlParam($field, $value, $posField): SqlParam
    {
        $fieldType = $this->fieldTypes[$posField];
        $length = $this->fieldLengths[$posField];

        return new SqlParam($field, $value, $fieldType, $length);
    }

    /**
     * Devuelve un array con los nombres de los campos y sus valores.
     *
     * @return array Array que contiene los valores de los campos
     */
    public function toArray(): array
    {
        $data = [];
        for ($index = 0; $index < $this->numFields; ++$index) {
            $fieldName = $this->fields[$index];
            $data[$fieldName] = $this->$fieldName;
        }

        return $data;
    }

    /**
     * Devuelve una cadena de texto con la cláusula <b>WHERE</b> para filtrar una sentencia SQL.
     *
     * @return string Texto que contiene la condición con la cláusula <b>WHERE</b>, o una cadena vacía si el parámetro está vacío
     */
    public function where(string $filter): string
    {
        return ($filter) ? " WHERE $filter" : '';
    }
}
