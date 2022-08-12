<?php

namespace src;

class Task3
{
    public static function main($n)
    {
        echo gettype($n);
        echo(is_float($n));
        if ($n <= 1) {
            throw new \InvalidArgumentException('Number must be positive');
        } elseif (is_float($n)) {
            throw new \InvalidArgumentException('float');
        }
        if ($n < 10) {
            return $n;
        } else {
            return ($n - 1) % 9 + 1;
        }
    }
}
