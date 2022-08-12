<?php

namespace src;

class Task9
{
    public static function main(array $arr, int $number)
    {
        foreach ($arr as $elem) {
            if ($elem !== (int) $elem) {
                throw new \InvalidArgumentException('first function argument should be an array of numbers only');
            }
        }

        $count = count($arr) - 2;
        $result = [];
        for ($i = 0; $i < $count; $i++) {
            if ($arr[$i] + $arr[$i + 1] + $arr[$i + 2] === $number) {
                array_push($result, "{$arr[$i]} + {$arr[$i + 1]} + {$arr[$i + 2]} = $number");
            }
        }

        return $result;
    }
}
