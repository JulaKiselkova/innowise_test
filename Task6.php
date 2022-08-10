<?php

namespace src;

class Task6
{
    public static function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday')
    {
        $mondayConst = 1;
        $start = "${lastYear}-${lastMonth}-01.";
        $end = date("Y-m-t", strtotime("${year}-${month}-01."));

        $startDate = strtotime($start);
        $endDate = strtotime($end);

        echo $start;
        echo $end;

        $startWeekDay = date("N", $startDate);
        $endWeekDay = date("N", $endDate);

        if ($startWeekDay < $endWeekDay) {
            $partialWeekCount = ($mondayConst >= $startWeekDay && $mondayConst <= $endWeekDay);
        } elseif ($startWeekDay == $endWeekDay) {
            $partialWeekCount = $startWeekDay == $mondayConst;
        } else {
            $partialWeekCount = ($mondayConst >= $startWeekDay || $mondayConst <= $endWeekDay);
        }
        return floor(abs($endDate-$startDate)/(60*60*24*7))+$partialWeekCount;
    }
}

?>

}
