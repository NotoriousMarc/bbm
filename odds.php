<?php

$totalNumbers = 50;
$numbers = [];

for ($i=1; $i <= $totalNumbers; $i++) {
    $numbers[] = $i++;
}

printNumbers($numbers);

function printNumbers (array $numbers) : void
{
foreach ($numbers as $numbers) {

   
    echo "this number is an odd number " . $numbers . "." . "<br>";

}


}