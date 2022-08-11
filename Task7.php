<?php

namespace src;

class Task7
{
    public function main(array $arr, int $position): array
    {
        if ($position < 0) {
            throw new \InvalidArgumentException('position must be >= 0');
        }
        if (!in_array($position, range(0, count($arr) - 1))) {
            throw new \InvalidArgumentException('Given array has no such position');
        }
        array_splice($arr, $position, 1);

        return $arr;
    }
}
