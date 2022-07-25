<?php  
    $age = 5;

    if($age < 13 && $age > 0){
        echo "You are a baby";
    }elseif($age < 20 && $age >= 13){
        echo "You are a teeanger";
    }elseif($age < 30 && $age >= 20){
        echo "You are a a young person";
    }elseif($age < 50 && $age >= 30){
        echo "You are a middle age person";
    }elseif($age >= 50 && $age < 150){
        echo "You are an old person";
    }else{
        echo "Sorry! you are not in this world!";
    }

    echo "<br>";

    // $city = "Kolkata";

    switch ($age) {
        case ($age < 13 && $age > 0):
            echo "Dhaka ekhon faka";
            break;
        case ($age < 20 && $age >= 13):
            echo "Dhaka ekhon faka";
            break;
        case ($age < 30 && $age >= 20):
            echo "Dhaka ekhon faka";
            break;
        case ($age < 50 && $age >= 30):
            echo "Dhaka ekhon faka";
            break;
        case ($age >= 50 && $age < 150):
            echo "Dhaka ekhon faka";
            break;
        
        default:
            echo "Podda shetu diye ghure ashlam!";
            break;
    }

    echo "<br>";

    $x = 10;

    // if($x < 12){
    //     echo "halum";
    // }else{
    //     echo "ha ha";
    // }
    echo ($x < 8)? "halum":"ha ha";

     echo "<br>";
    // if(isset($x)){
    //     echo $x;
    // }else{
    //     echo 8;
    // }
    // echo (isset($x))? $x:8;

    echo $y ?? null;
?>