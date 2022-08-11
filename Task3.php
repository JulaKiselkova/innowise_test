<?php

namespace src;

class Task3
{
    public static function main(int $n)
    {
        if ($n < 0 || gettype($n) === 'float') {
            throw new \InvalidArgumentException('Number must be positive');
        } elseif ($n < 10) {
            return $n;
        } else {
            return ($n - 1) % 9 + 1;
        }
    }
}
