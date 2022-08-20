<?php  
    include_once("./header.php")
?>

<?php 
    $age = 15;
    if($age < 10){
?>
    <b>Hello World</b>
<?php  
    }
?>

<?php  
    // $fileName = basename($_SERVER['PHP_SELF']);
    // echo $_GET["name"] ?? header("location: $fileName?name=Asif");
?>

<?php  
    if(isset($_POST['sub123'])){
       $uname = $_POST['uname'];
       if(empty($uname)){
            $errUname = "Please write your name";
       }elseif(strlen($uname) < 3){
            $errUname = "Very small name";
       }else{
        $crrUname = $uname;
        $uname = null;
       }
    }
?>

<form action="" method="post">
    <input type="text" placeholder="Your Name" name="uname" value="<?= $uname ?? null ?>">
    <input type="submit" value="Sign Up" name="sub123">
</form>

<?= $errUname ?? $crrUname ?? null ?>

<?php  
    include_once("./footer.php")
?>