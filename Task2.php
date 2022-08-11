<?php

namespace src;

class Task2
{
    public static function main(string $date)
    {
        if (strtotime($date) === false) {
            throw new \InvalidArgumentException('Wrong data');
        } else {
            $today = date('d.m.Y');
            $d1_ts = strtotime($today);
            $d2_ts = strtotime($date);
            $seconds = abs($d1_ts - $d2_ts);
            $days = $seconds / (60 * 60 * 24);

            return $days;
        }
    }
}
