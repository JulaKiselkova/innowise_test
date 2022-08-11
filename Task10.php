<?php

namespace src;

class Task10
{
    public static function main(int $input)
    {
        if ($input === 1) {
            return 1;
        } elseif ($input % 2 === 0) {
            $newNumber = $input / 2;

            return collatz($newNumber);
        } else {
            $newNumber = ($input * 3) + 1;

            return collatz($newNumber);
        }
    }
}
