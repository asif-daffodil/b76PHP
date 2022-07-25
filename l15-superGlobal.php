<?php
//GLOBALS

$x = "Shetu";

function myFunc()
{
    return $GLOBALS["x"];
}

echo myFunc() . "<br>";


// $_SERVER[];
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo $_SERVER["PHP_SELF"] . "<br>";
echo $_SERVER["REQUEST_METHOD"];
