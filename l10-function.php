<?php 
    $x = 50;
    function dhaka ($y) {
        // return $GLOBALS['x'];
        return $y;
    }


    echo dhaka("Bangladesh")."<br>";
    echo dhaka("USA")."<br>";
    echo dhaka($x)."<br>";

    function multiPera ($pera1 = "Ananta", $pera2 = "Jalil") {
        return  $pera1." ".$pera2;
    }

    echo multiPera("Hero", "Alom")."<br>";
    echo multiPera()."<br>";
    echo multiPera("Hero")."<br>";
    echo multiPera(pera2:"Hero", pera1:"Nazmul")."<br>";

    $myFunc = fn($msg) => $msg;

    echo $myFunc("Alhadulillah");
?>