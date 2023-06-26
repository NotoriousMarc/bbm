<?php

$num1 = 20;
$num2 = 0;
$addTotal = add($num1,$num2);
$multiplyTotal = multiply($num1,$num2);
$minusTotal = minus($num1,$num2);
$divideTotal = divide($num1,$num2);

echo "The add total is $addTotal <br>";
echo "The multiply total is $multiplyTotal<br>";
echo "The minus total is $minusTotal<br>";
echo "The divide total is $divideTotal<br>";



function add(int $a, int $b) : int
{
    return $a + $b;
}

function multiply(int $a, int $b) : int
{
    return $a * $b;
}

function minus(int $a, int $b) : int
{
    return $a - $b;
}
function divide(int $a, int $b) : int|string
{
    if ($b > 0) {
        return $a / $b;
    } else {
        return "divide by 0 error";
    }
 
}
