<?php 
    $w = (int) fgets(STDIN);
    if($w % 2 == 0 && $w > 2){
        echo "YES";
    }else{
        echo "NO";
    }
?>