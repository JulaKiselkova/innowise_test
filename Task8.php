<?php

namespace src;

class Task8
{
    public static function main(string $json)
    {
        $obj = json_decode($json, true);
        $arrOfStrings = [];
        foreach ($obj as $key => $value) {
            if (gettype($value) != 'array') {
                array_push($arrOfStrings, "{$key}: {$value}\n");
            } else {
                foreach ($value as $keyInside => $valueInside) {
                    array_push($arrOfStrings, "{$keyInside}: {$valueInside}\n");
                }
            }
        }

        return implode('', $arrOfStrings);
    }
}
