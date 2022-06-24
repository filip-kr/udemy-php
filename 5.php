<?php
// Step1: Use a pre-built math function here and echo it
$ceilFunc = ceil(12.2);
$floorFunc = floor(12.2);
$absValue = abs(-10);

// Step 2:  Use a pre-built string function here and echo it
$upperCase = strtoupper('i love php');
$lowerCase = strtolower('I LOVE PHP');

// Step 3:  Use a pre-built Array function here and echo it
$family = ['Filip', 'Tea', 'Grga', 'Mali', 'Nora'];
$arReverse = array_reverse($family);

echo $ceilFunc, '<br />', $floorFunc, '<br />', $absValue, '<hr />', $upperCase, '<br />', $lowerCase, '<hr />';

print_r($arReverse);
