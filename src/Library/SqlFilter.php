<?php

namespace App\Library;

use Symfony\Component\HttpFoundation\Request;

class SqlFilter
{
    public static Request $request;

    public static function text(string $sqlField, string $value): string
    {
        if (!empty($value)) {
            $value = Sql::parseText($value);

            return  " AND $sqlField = '$value'";
        }

        return '';
    }

    public static function likeOr(array $sqlFields, string $value): string
    {
        if (empty($value)) {
            return '';
        }
        $parts = [];
        $likeValue = Sql::like($value, true);
        foreach ($sqlFields as $field) {
            $parts[] = "$field ILIKE $likeValue";
        }

        return ' AND ('.implode(' OR ', $parts).')';
    }

    public static function like(string $sqlField, string $value): string
    {
        return empty($value) ? '' : " AND $sqlField ILIKE ".Sql::like($value, true);
    }

    public static function int(string $sqlField, int $value, string $operator = '='): string
    {
        return $value === 0 ? '' : " AND $sqlField $operator $value";
    }

    public static function fromDate(string $sqlField, $value): string
    {
        $date = Tools::dateToSQL($value);

        return empty($date) ? '' : " AND $sqlField >= '$date'";
    }

    public static function toDate(string $sqlField, $value): string
    {
        $date = Tools::dateToSQL($value);

        return empty($date) ? '' : " AND $sqlField <= '$date'";
    }

    public static function textPost($sqlField, $postField): string
    {
        return self::text($sqlField, self::$request->request->get($postField, ''));
    }

    public static function likePost(string $sqlField, string $postField): string
    {
        return self::like($sqlField, self::$request->request->get($postField, ''));
    }

    public static function likePostOr(array $sqlFields, string $postField): string
    {
        return self::likeOr($sqlFields, self::$request->request->get($postField, ''));
    }

    public static function intPost($sqlField, $postField, $operator = '='): string
    {
        return self::int($sqlField, self::$request->request->getInt($postField), $operator);
    }

    public static function fromDatePost($sqlField, $postField): string
    {
        return self::fromDate($sqlField, self::$request->request->get($postField));
    }

    public static function toDatePost($sqlField, $postField): string
    {
        return self::toDate($sqlField, self::$request->request->get($postField));
    }

    public static function inArray($sqlField, array $aValues): string
    {
        return empty($aValues) ? '' : " AND $sqlField IN (".implode(',', $aValues).')';
    }
}
