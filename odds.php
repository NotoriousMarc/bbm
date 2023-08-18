<?php

$totalNumbers = 50;
$numbers = [];
for ($i=1; $i <= $totalNumbers; $i++) {
    $numbers[] = $i;
}

printNumbers($numbers);

function printNumbers (array $numbers) : void
{
    foreach ($numbers as $number) {
        if (is_float($number/2)) {
            echo "this number is an odd number " . $number . "." . "<br>";
        } else {
            echo "this number is an even number " . $number . "." . "<br>";
        }

        if (is_float($number/3) === false) {
            echo $number . " is divisible by 3." . "<br>";
        }
    }
}