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

        $day = date('d', $birthday->getTimestamp());
        $month = date('m', $birthday->getTimestamp());
        $year = date('Y', $now->getTimestamp());

        $date = "${day}-${month}-${year}";
        $birthdayThisYear = date_create_from_format('d-m-Y', $date);

        $nextYear = (int)$year + 1;
        $dateDiff = date_diff($now, $birthdayThisYear);

        $dateToCompare = $dateDiff->invert < 1 ?
            $birthdayThisYear : date_create_from_format('d-m-Y', "${day}-${month}-${nextYear}");

        return date_diff($dateToCompare, $now)->days;
    }

    public static function validDate(string $date): bool
    {
        $dateObj = date_create_from_format('d-m-Y', $date);

        return $dateObj && $dateObj->format('d-m-Y') === $date;
    }
}
