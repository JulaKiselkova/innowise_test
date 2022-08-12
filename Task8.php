<?php

namespace src;

class Task8
{
    public static function main(string $json)
    {
        $arrRes = [];
        $data = json_decode($json, true);
        if (!(is_array($data) && json_last_error() === JSON_ERROR_NONE)) {
            throw new \InvalidArgumentException('valid json');
        }
        $result = Task8::toUnnestedArray($data);
        foreach ($result as $key => $value) {
            $str = $key . ': ' . $value ."\r". "\n";
            //echo $key . ': ' . $value . "\n";
            array_push($arrRes, $str);
        }

        return implode("\n", $arrRes);
    }

    public static function toUnnestedArray(array $array): array
    {
        if (!is_array($array)) {
            throw new \InvalidArgumentException('array only');
        }
        if (empty($array)) {
            throw new \InvalidArgumentException('function accepts empty array as argument');
        }
        $result = [];
        foreach ($array as $key => $value) {
            if (!is_array($value)) {
                $result[$key] = $value;
            } else {
                $result = array_merge($result, Task8::toUnnestedArray($value));
            }
        }

        return $result;
    }
}
echo "\n";
echo Task8::main('{
"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}
}
');
