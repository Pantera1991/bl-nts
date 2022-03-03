<?php


namespace BaseLinkerNts\Utils;


class Format
{
    public static function phone(string $phone): string
    {
        if ("" === $phone || empty($phone)) {
            return "000000000";
        }

        $phone = str_replace([" ", "-"], "", $phone);

        $prefixPhone = "+48";

        if (strpos($phone, $prefixPhone) === 0) {
            $phone = substr($phone, strlen($prefixPhone));
        }

        return $phone;
    }
}