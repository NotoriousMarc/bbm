<?php

$people = [];
$people['firstname'] = "Marc";
$people['lastname'] = "Barnes";
$people['age'] = 37;

echo "My name is {$people['firstname']} {$people['lastname']}. My age is {$people['age']}. <br>";


foreach ($people as $key => $value) {
   echo "The $key is $value <br>";
}
