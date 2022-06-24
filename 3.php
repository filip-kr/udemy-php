<?php
// Step 0
$numberOne = 10;
$numberTwo = 20;
$numberSum = $numberOne + $numberTwo;


if ($numberOne + $numberTwo = $numberSum) {
    echo 'numberOne plus numberTwo equals numberSum';
}

echo '<br />';

if ($numberSum > 50) {
    echo 'numberOne plus numberTwo equals numberSum';
} else {
    echo 'numberSum is not greater than 50';
}

echo '<br />';

// Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
if ($numberSum < 5) {
    echo 'Cold';
} elseif ($numberSum < $numberTwo) {
    echo 'Still cold';
} else {
    echo 'I love PHP';
}

echo '<br />';

// Step 2: Make a forloop  that displays 10 numbers
for ($x = 1; $x <= 10; $x++) {
    echo $x, '<br />';
}

// Step 3 : Make a switch Statement that test againts one condition with 5 case
switch ($numberOne) {
    case 6:
        echo 'numberOne is 6';
        break;

    case 7:
        echo 'numberOne is 7';
        break;

    case 8:
        echo 'numberOne is 8';
        break;

    case 9:
        echo 'numberOne is 9';
        break;

    case 10:
        echo 'numberOne is 10';
        break;

    default:
        echo 'no case equals 10';
        break;
}
