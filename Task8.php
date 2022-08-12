<?php

namespace src;

class Task8
{
    public function main(string $json)
    {
        $data = json_decode($json, true);
        if (!(is_array($data) && json_last_error() === JSON_ERROR_NONE)) {
            throw new \InvalidArgumentException('valid json');
        }
        $result = $this->toUnnestedArray($data);
        foreach ($result as $key => $value) {
            echo $key . ': ' . $value . "\n";
        }
    }

    public function toUnnestedArray(array $array): array
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
                $result = array_merge($result, $this->toUnnestedArray($value));
            }
        }

        return $result;
    }
}
