<?php
// indexed array
// $city = array("Dhaka", "Rajshahi", "khulna", "Rongpur");
$city = ["Dhaka", "Rajshahi", "khulna", "Rongpur", "Joypurhat"];

// echo $city;

var_dump($city);

echo "<br>" . $city[0] . "<br>";

echo "<pre>";
print_r($city);
echo "</pre>";

echo $city[0] . ", " . $city[1] . ", " . $city[2] . ", " . $city[3] . "<br>";

echo count($city) . "<br>";

for ($i = 0; $i < count($city); $i++) {
    $koma = ($i === count($city) - 1) ? "<br>" : ", ";
    echo $city[$i] .  $koma;
}

$i = 0;
foreach ($city as $ct) {
    $koma = ($i === count($city) - 1) ? "<br>" : ", ";
    echo $ct . $koma;
    $i++;
}

//Associative array
$personInfo = ["name" => "Asif Abir", "city" => "Dhaka", "Gender" => "Male"];
echo "<pre>";
var_dump($personInfo);
echo "</pre>";
echo "<pre>";
print_r($personInfo);
echo "</pre>";
echo "Name : " . $personInfo["name"] . ", City : " . $personInfo["city"] . ", Gender : " . $personInfo["Gender"] . "<br>";

foreach ($personInfo as $key => $val) {
    echo ucwords($key) . " : " . $val . "<br>";
}


//Multidimntional array
$bd = [["Kamal", "Jamal", "Tomal", "Akmal"], ["Dhaka", "Cumilla", "Chittagong", "Cox Bazar"], [25, 35, 45, 55]];

echo "<pre>";
print_r($bd);
echo "</pre>";

foreach ($bd as $data) {
    foreach ($data as $val) {
        echo $val . " ";
    }
    echo "<br>";
}

for ($i = 0; $i < count($bd); $i++) {
    for ($j = 0; $j < count($bd[$i]); $j++) {
        echo $bd[$i][$j] . " ";
    }
    echo "<br>";
}

echo $bd[0][1] . "<br>";

$persons = [
    "names" => ["Abul", "Babul", "Kabul", "Mokbul", "Bulbul"],
    "cities" => ["Dhaka", "Chadpur", "Bandarban", "Dinajour", "Pirojpur"],
    "ages" => [10, 12, 6, 60, 35]
];

$text = [" lives in", " and his age is ", "."];
foreach ($persons as $person) {
    foreach ($person as $info) {
        echo $info . " ";
    }
    echo "<br>";
}

$totalData = count($persons["names"]);

for ($i = 0; $i < $totalData; $i++) {
    echo $persons["names"][$i] . $text[0] . $persons["cities"][$i] . $text[1] . $persons["ages"][$i] . $text[2] . "<br>";
}
