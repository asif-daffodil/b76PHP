<?php

//Make a function that takes a year as argument and returns that the year is leap-year or not

function isLeapYear($year)
{
    if (!is_numeric($year)) {
        echo "String is not allowed. Input should be a number.";
        return;
    }
    // check leap year
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        echo $year, "is a leap year";
    } else {
        echo $year, " is not a leap year";
    }
}

$year = "1900";
isLeapYear($year);
