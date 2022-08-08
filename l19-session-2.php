<?php  
    session_start();

    echo $_SESSION['uName']." ".$_SESSION['uEmail'];
    echo "<br>";
    // echo $uName;
?>