<?php

namespace src;

class Task2
{
    public static function main(string $date): int
    {
        if (!Task2::validDate($date)) {
            throw new \InvalidArgumentException("main function only accepts 'DD.MM.YYYY' date format. Input was: " . $date);
        }
        $now = date_create(date('d-m-Y'));
        $birthday = date_create($date);
        $diff = date_diff($birthday, $now);
        if ($birthday > $now) {
            return $diff->days;
        } else {
            return '-' . $diff->days;
        }
    }

    public static function validDate(string $date): bool
    {
        $dateObj = date_create_from_format('d-m-Y', $date);

        return $dateObj && $dateObj->format('d-m-Y') === $date;
    }
}
