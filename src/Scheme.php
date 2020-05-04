<?php

namespace vetaloffline;

class Scheme
{
    public function isFirstBigger($itemOne, $itemTwo)
    {
        return $itemOne > $itemTwo;
    }

    public static function lowerText($text)
    {
        return strtolower($text);
    }
}