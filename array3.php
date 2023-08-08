<?php

$family = [
[
    "name" => "John Barnes",
    "relationship" => "father",
    "gender" => "Male",
    "date_of_birth" => "January 28, 1952",
    "year_of_birth" => 1952

],
[
    "name" => "Faye Barnes",
    "relationship" => "mother",
    "gender" => "Female",
    "date_of_birth" => "June 3, 1955",
    "year_of_birth" => 1955

],
[
    "name" => "Shaun Barnes",
    "relationship" => "brother",
    "gender" => "Male",
    "date_of_birth" => "July 4, 1980",
    "year_of_birth" => 1980
],
[
    "name" => "Donna-Marie Barnes",
    "relationship" => "wife",
    "gender" => "Female",
    "date_of_birth" => "April 13, 1987",
    "year_of_birth" => 1987
],
[
    "name" => "Maiya Barnes",
    "relationship" => "daughter",
    "gender" => "Female",
    "date_of_birth" => "September 20, 2019",
    "year_of_birth" => 2019
],
[
    "name" => "Zen Barnes",
    "relationship" => "nephew",
    "gender" => "Male",
    "date_of_birth" => "October 25, 2006",
    "year_of_birth" => 2006
]

];

printFamily($family);

function printFamily (array $family) : void
{
    foreach ($family as $key => $familyMember) {
        echo "($key) The " . $familyMember["relationship"] . "'s name is " . $familyMember["name"] . "." . "<br>";
        echo "($key) The " . $familyMember["relationship"] . "'s D.O.B is " . $familyMember["date_of_birth"] . "." . "<br>";
        echo "($key) The " . $familyMember["relationship"] . "'s gender is " . $familyMember["gender"] .  "." . "<br>";
        echo "($key) The " . $familyMember["relationship"] . "'s age is " . calculateAge(2023,$familyMember["year_of_birth"]) . "." . "<br>";
       
        if (calculateAge(2023,$familyMember["year_of_birth"]) > 18) {
            echo "($key) The " . $familyMember["relationship"] . " is an adult" . "<br> <br>";
        } elseif (calculateAge(2023,$familyMember["year_of_birth"]) < 13) {
            echo "($key) The " . $familyMember["relationship"] . " is a minor" . "<br> <br>";
        } else {
            echo "($key) The " . $familyMember["relationship"] . " is a teenager" . "<br> <br>";
        }
    }
}

function calculateAge(int $currentYear, int $yearOfBirth) : int
{
    return $currentYear - $yearOfBirth;
}