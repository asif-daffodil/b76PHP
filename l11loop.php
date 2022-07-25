<?php  
    // while loop
    $startPoint = 0;
    while ($startPoint < 10) {
        echo $startPoint." ";
        $startPoint++;
    }
    echo "<br>";

    $startPoint = 9;
    while ($startPoint >= 0) {
        echo $startPoint." ";
        $startPoint--;
    }

    $gunok = 2;
    $gunitok = 1;
    while ($gunitok <= 10){
        echo $gunok." x ".$gunitok." = ".($gunok * $gunitok)."<br>";
        $gunitok++;
    }

    for ($i=0; $i < 10; $i++) { 
        echo $i." ";
    }
    echo "<br>";

    for ($j=2; $j <= 100; $j += 2) { 
        echo $j." ";
    }
    echo "<br>";
    for ($k=1; $k <= 100; $k++) { 
        echo ($k % 7 === 0)? $k." ":null;
    }
    echo "<br>";
    $count = 0;
    for ($l=1; $l <= 100; $l++) { 
        if($l % 13 === 0){
            $count++;
        }
    }
    echo $count."<br>";

    $x = 15;
    do{
        echo $x;
        $x++;
    }while ($x < 10)
?>