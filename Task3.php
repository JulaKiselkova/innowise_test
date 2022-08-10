<?php
namespace src;
class Task2
{
    public static function main(int $n)
    {
        if($n < 0) {
            return throw new \InvalidArgumentException("Number must be positive");
        }
        if($n < 10) {
            return $n;
        } else {
            return ($n - 1) % 9 + 1;
        }

    }
}

?>