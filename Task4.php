<?php

namespace src;

class Task4
{
    public function main(string $input)
    {
        $wordsToUpper = ucwords($input, '-_ ');

        return str_replace(['-', '_', ' '], '', $wordsToUpper);
    }
}
