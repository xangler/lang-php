<?php

namespace Converter;

class Converter
{
    public function convertToCm($value)
    {
        return $value * 0.3937;
    }

    public function convertToInch($value)
    {
        return $value * 2.54;
    }
}

