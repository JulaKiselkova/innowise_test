<?php

namespace src;

class Task4
{
    public static function main(int $input)
    {
        if (gettype($input) != 'string') {
            throw new \InvalidArgumentException('Wrong data');
        } else {
            $results = preg_split('/[\s_-]+/', $input);
            $arrOfResult = [];
            foreach ($results as $res) {
                $res[0] = strtoupper($res);
                array_push($arrOfResult, $res);
            }

            return implode('', $arrOfResult);
        }
    }
}
