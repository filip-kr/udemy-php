<?php

// Step1: Define a function and make it return a calculation of 2 numbers
function addFiveAndSeven()
{
	$num1 = 5;
	$num2 = 7;
	$sum = $num1 + $num2;

	echo $sum;
}

addFiveAndSeven();

echo '<br />';

// Step 2: Make a function that passes parameters and call it using parameter values 
function addTwoNumbers($num1, $num2)
{
	$sum = $num1 + $num2;

	echo $sum;
}

addTwoNumbers(50, 40);
