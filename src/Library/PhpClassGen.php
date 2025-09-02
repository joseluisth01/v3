<?php

namespace App\Library;

class PhpClassGen
{
    private string $tableName;
    private string $buffer = '';
    private array $fields = [];
    private array $pkFields = [];
    private string $fileName;
    private string $lineFieldsNoUpper = '';
    private string $additionalCode = '';
    private array $useLines = [];
    private string $commentEndCode = '// -- END generated code --';

    const CRLF = "\n";
    const CRLF_2 = self::CRLF.self::CRLF;
    const TAB = '    ';
    const TAB_2 = self::TAB.self::TAB;

    public function __construct()
    {
        $this->useLines[] = 'App\Library\SqlOrm';
    }

    public static function getTableNames(): array
    {
        $sql = "SELECT relname FROM pg_class, pg_user WHERE usesysid = relowner and (relkind = 'r') and relname !~ '^pg_' and relname !~ '^sql_' order by relname";

        return Sql::selectArrayOneField($sql);
    }

    public function getPhpCode(string $tableName, $projectDir = null): string
    {
        $this->tableName = $tableName;
        $className = str_replace('_', '', ucwords($tableName, '_'));

        $writeFile = !empty($projectDir);
        if ($writeFile) {
            $this->fileName = "$projectDir/src/Entity/$className.php";
            $this->readFile();
        }

        $this->readFieldsFromDB();

        $methodMustInsert = $this->methodMustInsert();

        $useStatement = '';
        asort($this->useLines);
        foreach ($this->useLines as $item) {
            $useStatement .= 'use '.$item.';'.self::CRLF;
        }
        if (!empty($useStatement)) {
            $useStatement .= self::CRLF;
        }

        $this->buffer = '<?php'
            .self::CRLF_2
            .'namespace App\Entity;'
            .self::CRLF_2
            .$useStatement
            .'class '.$className.' extends SqlOrm'
            .self::CRLF
            .'{'
            .self::CRLF;

        $this->buffer .= $this->declareFields();
        $this->buffer .= self::CRLF;
        $this->buffer .= $this->constructor();
        $this->buffer .= self::CRLF;
        $this->buffer .= $methodMustInsert;
        $this->buffer .= self::CRLF;
        $this->buffer .= self::TAB.$this->commentEndCode;
        $this->buffer .= self::CRLF;

        if (!empty($this->additionalCode)) {
            $this->buffer .= $this->additionalCode;
        }

        $this->buffer .= '}'.self::CRLF;
        if ($writeFile) {
            $this->writeFile();
        }

        return $this->buffer;
    }

    private function declareFields(): string
    {
        $tab = self::TAB;
        $crlf = self::CRLF;
        $text = '';
        foreach ($this->fields as $field) {
            $type = $this->getPHPType($field['data_type'], $field['is_nullable']);
            if (!empty($field['description'])) {
                $text .= "$tab/**$crlf"
                    ."$tab * {$field['description']}$crlf"
                    ."$tab * @var $type$crlf"
                    ."$tab */$crlf";
            } else {
                $text .= "$tab/** @var $type */$crlf";
            }
            $text .= "{$tab}public \${$field['column_name']};$crlf";
        }

        return $text;
    }

    private function constructor(): string
    {
        $aTypes = array_map(
            function ($field) {
                return $this->getPHPType($field['data_type'], false, true);
            },
            $this->fields
        );

        $aLength = array_map(
            function ($field) {
                return (int) $field['character_maximum_length'];
            },
            $this->fields
        );

        $aValues = array_map(
            function ($field) {
                if ($field['is_nullable']) {
                    return 'null';
                } elseif ($field['is_serial'] || $field['is_identity']) {
                    return '0';
                } else {
                    $type = $this->getPHPType($field['data_type']);
                    if ($type === 'int' || $type === 'float' || $type === 'bool') {
                        return $field['column_default'] ?? 'null';
                    } else {
                        return "'{$field['column_default']}'";
                    }
                }
            },
            $this->fields
        );

        $text = self::TAB.'public function __construct()';
        $text .= self::CRLF.self::TAB.'{'.self::CRLF;
        $text .= self::TAB_2.'parent::__construct();'.self::CRLF;
        $text .= self::TAB_2."\$this->fields = ['".implode("', '", array_column($this->fields, 'column_name'))."'];";
        $text .= self::CRLF.self::TAB_2."\$this->fieldTypes = ['".implode("', '", $aTypes)."'];";
        $text .= self::CRLF.self::TAB_2.'$this->fieldLengths = ['.implode(', ', $aLength).'];';
        $text .= self::CRLF.self::TAB_2.'$this->defaultValues = ['.implode(', ', $aValues).'];';
        $text .= self::CRLF.self::TAB_2.'$this->numFields = '.count($this->fields).';';
        $text .= self::CRLF.self::TAB_2."\$this->tableName = '$this->tableName';";
        $text .= self::CRLF.self::TAB_2."\$this->pkFields = ['".implode("', '", array_column($this->pkFields, 'column_name'))."'];";
        $text .= self::CRLF.self::TAB_2.'$this->numPkFields = '.count($this->pkFields).';';
        if ($this->isAutoIncrementPK()) {
            foreach ($this->pkFields as $field) {
                if ($field['is_serial'] || $field['is_identity']) {
                    $text .= self::CRLF.self::TAB_2."\$this->autoIncrementField = '{$field['column_name']}';";
                    break;
                }
            }
            $text .= self::CRLF.self::TAB_2.'$this->calcCodeNewReg = false;';
        } elseif (count($this->pkFields) === 1 && $this->getPHPType($this->pkFields[0]['data_type']) === 'int') {
            $text .= self::CRLF.self::TAB_2.'$this->calcCodeNewReg = true;';
        } else {
            $text .= self::CRLF.self::TAB_2.'$this->calcCodeNewReg = false;';
        }

        if (!empty($this->lineFieldsNoUpper)) {
            $text .= self::CRLF.$this->lineFieldsNoUpper;
        }

        $text .= self::CRLF_2.self::TAB_2.'if (func_num_args() > 0) {';
        $text .= self::CRLF.self::TAB_2.self::TAB.'$this->selectPK(func_get_args());';
        $text .= self::CRLF.self::TAB_2.'} else {';
        $text .= self::CRLF.self::TAB_2.self::TAB.'$this->clearFields();';
        $text .= self::CRLF.self::TAB_2.'}';

        $text .= self::CRLF.self::TAB.'}'.self::CRLF;

        return $text;
    }

    public function methodMustInsert(): string
    {
        $text = self::TAB.'public function mustInsert(): bool';
        $text .= self::CRLF.self::TAB.'{'.self::CRLF;

        if ($this->isAutoIncrementPK()) {
            $text .= self::TAB_2.'return '.$this->conditionAutoIncrementPK().';';
        } else {
            $text .= self::TAB_2;
            $text .= "\$sql = 'SELECT exists(SELECT 1 FROM $this->tableName WHERE ' . \$this->sqlPKCondition() . ')';";
            $text .= self::CRLF;
            if (count($this->pkFields) > 0) {
                $this->addUseLibrary('SqlParam');
                foreach ($this->pkFields as $field) {
                    $fieldName = $field['column_name'];
                    $maxLength = (int) $field['character_maximum_length'];
                    $phpType = $this->getPHPType($field['data_type']);
                    $text .= self::TAB_2;
                    $text .= "\$param[] = new SqlParam('$fieldName', \$this->$fieldName, '$phpType', $maxLength);";
                    $text .= self::CRLF;
                }
                $text .= self::TAB_2;
                $text .= 'return !Tools::toBool($this->selectEscalar($sql, $param));';
            } else {
                $text .= self::TAB_2;
                $text .= 'return !Tools::toBool($this->selectEscalar($sql));';
            }
            $this->addUseLibrary('Tools');
        }

        $text .= self::CRLF.self::TAB.'}'.self::CRLF;

        return $text;
    }

    private function conditionAutoIncrementPK(): string
    {
        $cond = [];
        foreach ($this->pkFields as $field) {
            $fieldName = $field['column_name'];
            $phpType = $this->getPHPType($field['data_type']);
            if ($field['is_nullable']) {
                $cond[] = "\$this->$fieldName == null";
            } elseif ($phpType === 'int' || $phpType === 'float') {
                $cond[] = "\$this->$fieldName == 0";
            } elseif ($phpType === 'bool') {
                $cond[] = "\$this->$fieldName == false";
            } else {
                $cond[] = "is_empty($fieldName)";
            }
        }

        return implode(' && ', $cond);
    }

    private function isAutoIncrementPK(): bool
    {
        foreach ($this->pkFields as $field) {
            if ($field['is_serial'] || $field['is_identity']) {
                return true;
            }
        }

        return false;
    }

    private function readFieldsFromDB()
    {
        $sql = "SELECT
                columns.column_name,
                columns.udt_name AS data_type,
                replace(
                    case
                        when position('now' in columns.column_default ) > 0 then 'now'
                        when position('::' in columns.column_default) > 0 then substr(columns.column_default, 1, position('::' in columns.column_default) - 1)
                        else columns.column_default
                    end,
                '''', '') AS column_default,
                position('nextval' in columns.column_default) = 1 AS is_serial,
                columns.is_identity = 'YES' AS is_identity,
                columns.is_nullable = 'YES' AS is_nullable,
                columns.character_maximum_length,
                pg_description.description,
                pg_constraint.conname   IS NOT NULL AS is_primary_key
            FROM information_schema.columns
            LEFT JOIN pg_class ON columns.table_name::name = pg_class.relname
            LEFT JOIN pg_description ON pg_class.oid = pg_description.objoid AND columns.ordinal_position::INTEGER = pg_description.objsubid
            LEFT JOIN pg_attribute ON pg_attribute.attrelid = columns.table_name::regclass AND pg_attribute.attname = columns.column_name
            LEFT JOIN pg_constraint on pg_attribute.attnum = ANY(pg_constraint.conkey) AND pg_constraint.conrelid=pg_attribute.attrelid AND pg_constraint.contype='p'
            WHERE columns.table_schema::text = 'public'::text AND columns.table_name = '$this->tableName'
            ORDER BY columns.ordinal_position";

        $this->fields = Sql::selectAll($sql);
        $this->getFieldsPK();
    }

    private function getFieldsPK()
    {
        $sql = "SELECT a.attname AS column_name
                FROM pg_index i
                JOIN pg_attribute a ON a.attrelid = i.indrelid AND a.attnum = ANY(i.indkey)
                WHERE i.indisprimary AND i.indrelid = '$this->tableName'::regclass
                ORDER BY array_position(i.indkey, a.attnum)";

        $this->pkFields = [];

        $keys = array_column($this->fields, 'column_name');
        foreach (Sql::selectAll($sql) as $row) {
            $index = array_search($row['column_name'], $keys);
            $this->pkFields[] = $this->fields[$index];
        }
    }

    private function getPHPType(string $typeName, bool $isNullable = false, $distinctTime = false): string
    {
        $aTypes = [
            'int' => ['oid', 'int2', 'int4', 'int8', 'uuid'],
            'float' => ['float4', 'float8', 'numeric', 'money'],
            'bool' => ['bit', 'bool'],
            'array' => ['bytea'],
            '\DateTime' => ['date', 'timetz', 'time', 'timestamp', 'timestamptz'],
            'object' => ['point', 'box', 'lseg', 'path', 'polygon', 'circle', 'inet', 'interval'],
        ];

        if ($distinctTime) {
            $aTypes['\DateTime'] = ['date'];
            $aTypes['time'] = ['timetz', 'time', 'timestamp', 'timestamptz'];
        }

        $phpType = 'string';
        foreach ($aTypes as $php => $dbTypes) {
            if (in_array($typeName, $dbTypes)) {
                $phpType = $php.($isNullable ? '|null' : '');
                break;
            }
        }

        return $phpType;
    }

    private function addUseLibrary(string $libName)
    {
        $fullPath = "App\\Library\\$libName";
        for ($i = count($this->useLines) - 1; $i >= 0; --$i) {
            if (mb_strpos($this->useLines[$i], $fullPath) !== false) {
                return;
            }
        }
        $this->useLines[] = $fullPath;
    }

    private function readFile()
    {
        if (!empty($this->fileName) && file_exists($this->fileName)) {
            $handle = fopen($this->fileName, 'r');
            if ($handle) {
                $additional = false;
                while (($line = fgets($handle)) !== false) {
                    if (mb_strpos($line, 'use') === 0) {
                        $className = trim(str_replace(['use', ';'], '', $line));
                        if (!in_array($className, $this->useLines)) {
                            $this->useLines[] = $className;
                        }
                    }

                    if ($additional) {
                        if (mb_stripos($line, '}') === 0) {
                            break;
                        }
                        $this->additionalCode .= $line;
                    } elseif (mb_stripos($line, 'fieldsNoUpper') !== false) {
                        $this->lineFieldsNoUpper = str_replace(["\r\n", "\n"], ['', ''], $line);
                    } elseif (mb_stripos($line, $this->commentEndCode) !== false) {
                        $additional = true;
                    }
                }
                fclose($handle);
            }
        }
    }

    private function writeFile()
    {
        if (!empty($this->fileName)) {
            $handle = fopen($this->fileName, 'w+');
            if ($handle) {
                fwrite($handle, $this->buffer);
                fclose($handle);
            }
        }
    }
}
