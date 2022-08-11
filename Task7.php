<?php

namespace src;

class Task7
{
    public static function main(array $arr, int $position)
    {
        var_dump($arr);
        array_splice($arr, $position, 1);
        var_dump($arr);
    }
}
