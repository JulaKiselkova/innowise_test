<?php

namespace src;

class Task5
{
    public static function main(int $n)
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('Number must be positive');
        }
        if ($n <= 1) {
            return $n;
        }

        return fib($n - 1) +
            fib($n - 2);
    }
}
