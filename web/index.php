<?php

require_once 'vendor/autoload.php';

use Converter\Converter;

$conv = new Converter;

$result = $conv->convertToCm(1);
echo $result;
echo "\n";

$result = $conv->convertToInch(1);
echo $result;
echo "\n";
