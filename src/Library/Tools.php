<?php

namespace App\Library;

use App\Library\RtfHtml\Document;
use App\Library\RtfHtml\Html\HtmlFormatter;
use DateTime;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use function is_string;

class Tools
{
    public static function dump($var)
    {
        if ($_ENV['APP_ENV'] == 'dev') {
            dd($var);
        } else {
            var_dump($var);
            exit(1);
        }
    }

    public static function rtfToTxt(string $textRtf): string
    {
        if (strpos($textRtf, '{\rtf') === 0) {
            $doc = new Document($textRtf);
            if ($doc->root) {
                $ht = new HtmlFormatter('UTF-8');

                return $ht->format2Txt($doc);
            }
        }

        return $textRtf;
    }

    public static function htmlGetText(string $html): string
    {
        return trim(strip_tags($html));
    }

    public static function parseHtmlText($text): string
    {
        return  empty($text) || !is_string($text) ? '' : $text;
    }

    public static function toBool($value): bool
    {
        if (empty($value)) {
            $value = false;
        } elseif (is_numeric($value)) {
            $value = $value !== 0;
        } elseif (is_string($value)) {
            $value = strtolower($value) !== 'f' && strtolower($value) !== 'false';
        }

        return $value;
    }

    public static function toFloat($floatVal): float
    {
        if (empty($floatVal)) {
            return 0.0;
        }

        $value = (string) $floatVal;
        if (strrpos($value, ',') !== false && strrpos($value, '.') !== false) {
            $value = str_replace('.', '', $value);
        }

        if (strrpos($value, ',') !== false) {
            $value = str_replace(',', '.', $value);
        }

        return (float) preg_replace('/[^\-\.\d]/', '', $value);
    }

    public static function toInt($intVal): int
    {
        if (empty($intVal)) {
            return 0;
        }

        $val = (int) $intVal;
        if ($val === 0) {
            $val = (int) self::toFloat($intVal);
        }

        return $val;
    }

    public static function floatFormat(float $number, int $decimals = 2): string
    {
        return number_format($number, $decimals, ',', '.');
    }

    public static function floatFormatNotZero(float $number, int $decimals = 2): string
    {
        return empty($number) ? '' : self::floatFormat($number, $decimals);
    }

    public static function toDate($objDate): ?DateTime
    {
        if (empty($objDate)) {
            return null;
        }

        if (($objDate instanceof DateTime)) {
            return $objDate;
        }

        $dateTxt = (string) $objDate;

        if (str_contains($dateTxt, 'now') || str_contains($dateTxt, 'CURRENT_')) {
            return new DateTime();
        }

        $day = 0;
        $month = 0;
        $year = 0;
        $dateTxt = str_replace('/', '-', $dateTxt);
        $dateInfo = date_parse($dateTxt);
        if ($dateInfo !== false && $dateInfo['error_count'] === 0) {
            $day = (int) $dateInfo['day'];
            $month = (int) $dateInfo['month'];
            $year = (int) $dateInfo['year'];
        }
        if ($day === 0 && $month === 0 && $year === 0) {
            $match = null;
            if (preg_match('/(\d{1,2})\D*(\d{0,2})\D*(\d{0,4})/', $dateTxt, $match)) {
                $day = $match[1] !== '' ? (int) $match[1] : 0;
                $month = $match[2] !== '' ? (int) $match[2] : 0;
                $year = $match[3] !== '' ? (int) $match[3] : 0;
            }
        }
        if ($day === 0 && $month === 0 && $year === 0) {
            return null;
        }

        try {
            $date = new DateTime();
            $date->setTime(0, 0);
        } catch (Exception $e) {
            return null;
        }

        if ($day === 0 || $month === 0 || $year === 0) {
            $day = $day !== 0 ? $day : (int) $date->format('d');
            $month = $month !== 0 ? $month : (int) $date->format('m');
            $year = $year !== 0 ? $year : (int) $date->format('Y');
        }

        if ($year < 1000) {
            $year += 2000;
        }

        if (!$date->setDate($year, $month, $day)) {
            return null;
        }
        if ((int) $date->format('m') !== $month) {
            return null;
        }

        return $date;
    }

    public static function dateToSql($objDate): string
    {
        if (($objDate instanceof DateTime)) {
            $date = $objDate;
        } else {
            $date = self::toDate($objDate);
        }

        return $date == null ? '' : date_format($date, 'Y-m-d');
    }

    public static function dateFormat($date, string $format = 'd-m-Y'): string
    {
        if (empty($date)) {
            return '';
        }

        if ($date instanceof DateTime) {
            return $date->format($format);
        }

        $dateTmp = DateTime::createFromFormat('Y-m-d', $date);

        if (!$dateTmp) {
            try {
                $dateTmp = new DateTime($date);
            } catch (Exception $e) {
            }
        }
        if (!empty($dateTmp)) {
            $date = date_format($dateTmp, $format);
        }

        return $date;
    }

    public static function fisrtDayMonth($date): DateTime
    {
        if (!($date instanceof DateTime)) {
            $date = new DateTime();
        }

        return new DateTime($date->format('Y') . '-' . $date->format('m') . '-1');
    }

    public static function lastDayMonth($date): DateTime
    {
        if (!($date instanceof DateTime)) {
            $date = new DateTime();
        }
        $year = $date->format('Y');
        $month = $date->format('m');

        return new DateTime(date('Y-m-t', strtotime(date("$year-$month-01"))));
    }

    public static function clearCIF($cif)
    {
        return empty($cif) ? '' : preg_replace('/[^A-Za-z0-9]/', '', $cif);
    }

    public static function monthName(int $month): string
    {
        $names = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        return ($month >= 1 && $month <= 12) ? $names[$month - 1] : '';
    }

    public static function codeVerifyOk($code, $verifyCode): bool
    {
        if (intval($code) === 0) {
            $code = 1;
        }
        $primeNumber = $verifyCode / (int) $code;
        $limit = sqrt($primeNumber);
        for ($divider = 2; $divider <= $limit; ++$divider) {
            if ($primeNumber % $divider == 0) {
                return false;
            }
        }

        return true;
    }

    public static function codeVerifyOkFromRequest(Request $request, string $codeField, string $verifyField): bool
    {
        $code = $request->request->getInt($codeField);
        $verify = $request->request->getInt($verifyField);

        return self::codeVerifyOk($code, $verify);
    }

    public static function coalesce(...$values)
    {
        if (empty($values)) {
            return null;
        }
        foreach ($values as $val) {
            if (!empty($val)) {
                return $val;
            }
        }

        return $values[count($values) - 1];
    }
}
