<?php

namespace src;

class Task10
{
    public static function collatz(int $input, $arrOfRes)
    {
        if ($input <= 0) {
            throw new \InvalidArgumentException('incorrect data');
        }
        if ($input === 1) {
            array_push($arrOfRes, 1);

            return $arrOfRes;
        } elseif ($input % 2 === 0) {
            $newNumber = $input / 2;
            echo "${newNumber},";
            array_push($arrOfRes, $input);

            return Task10::collatz($newNumber, $arrOfRes);
        } else {
            $newNumber = ($input * 3) + 1;
            echo "${newNumber},";
            array_push($arrOfRes, $input);

            return Task10::collatz($newNumber, $arrOfRes);
        }
    }

    public static function main(int $input)
    {
        return self::collatz($input, []);
    }
}
