<?php

namespace src;

class Task1
{
    public static function main($n)
    {
        $result = $n > 30
            ? "More than 30"
            : ($n > 20
                ? "More than 20"
                : ($n >10
                    ? "More than 10"
                    : "Equal or less than 10"));
        return $result;
    }
}
