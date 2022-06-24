<?php

// Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
$number1 = 10;
$number2 = 20;
$sum = $number1 + $number2;

// Step 2: Add the two variables and display the sum with echo:
echo $sum;
/* or */
echo $number1 + $number2;

// Step3: Make 2 Arrays with the same values, one regular and the other associative
$array1 = ['Filip', 'Tea', 'Mali', 'Grga'];
$array2 = [
	'Filip' => 'Tea',
	'Mali' => 'Grga'
];

echo '<pre>';
print_r($array1);
echo '<br/>';
var_dump($array2);
