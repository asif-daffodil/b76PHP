<?php
echo date("d-m-y") . "<br>";
echo date("d/m/y") . "<br>";
echo date("d/M/y") . "<br>";
date_default_timezone_set("Asia/Dhaka");
echo date_default_timezone_get() . "<br>";
echo date("d/F/Y h:i:s a") . "<br>";
echo date("d/F/Y H:i:s") . "<br>";
echo date("d/F/Y h:i:s A") . "<br>";
echo date("d/F/Y h:i:s A D") . "<br>";
echo date("d/F/Y h:i:s A l") . "<br>";

//mktime
// hour minute second month day year

$myTime = mktime(15, 39, 47, 9, 12, 2009);
echo date("d/F/Y h:i:s A l", $myTime) . "<br>";
$myTime2 = mktime(0, 0, 0, 5, 5, 2015);
echo date("d/F/Y h:i:s A l", $myTime2) . "<br>";

//strtotime

$nextFriday = strtotime("next friday");
echo date("d/F/Y h:i:s A l", $nextFriday) . "<br>";

$nextday = strtotime("tomorrow");
echo date("d/F/Y h:i:s A l", $nextday) . "<br>";

$previousDay = strtotime("yesterday");
echo date("d/F/Y h:i:s A l", $previousDay) . "<br>";

$myDate = strtotime("-2 years +3 month -1 week +2 days");
echo date("d/F/Y h:i:s A l", $myDate) . "<br>";

$startDate = strtotime("next friday");
$endDate = strtotime("+6 weeks", $startDate);

while ($startDate <= $endDate) {
    echo date("d/F/Y l", $startDate) . "<br>";
    $startDate = strtotime("+1 weeks", $startDate);
}
