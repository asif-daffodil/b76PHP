<?php  
    session_start();

    $_SESSION['uName'] = "Asif Abir";
    $_SESSION['uEmail'] = "abir@dipti.com.bd";

    $uName = "The Rock"; 

    echo $_SESSION['uName']." ".$_SESSION['uEmail'];
    echo "<br>";
    echo $uName;
?>