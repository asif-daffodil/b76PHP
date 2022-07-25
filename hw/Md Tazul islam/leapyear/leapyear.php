<?php


function checkYear($year)
{
    if (gettype($year) != "integer") {
        echo "Invalid Input, Write a year in number like 2022 or 2024!" . "<br>";
    } elseif ($year % 4 != 0) {

        echo "$year is not a leap year.";
    } else if ($year % 100 != 0) {
        echo "$year is a leap year.";
    } else if ($year % 400 == 0) {
        echo "$year is a leap year.";
    } else {
        echo "$year is not a leap year.";
    }
}

checkYear(2003);
