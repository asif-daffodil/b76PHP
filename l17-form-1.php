<?php  
    $errs = [];
    $genderList = ["Male", "Female"];
    $skillList = ["HTML", "CSS", "JS", "PHP"];
    $skillText = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sub123'])) {
        $uname = safuda($_POST["uname"]);
        $uemail = safuda($_POST["uemail"]);
        $gndr = safuda($_POST["gndr"] ?? null);
        $skills = safuda($_POST["skill"] ?? []);

        if(empty($uname)){
            $errs["name"] = "<span style='color: red'>Please provide the user name</span>";
        }elseif(!preg_match("/^[A-Za-z. ]*$/", $uname)){
            $errs["name"] = "<span style='color: red'>Invalid user name</span>";
        }else{
            $crrUname = $uname;
        }

        if(empty($uemail)) {
            $errs["email"] = "<span style='color: red'>Please provide the email address</span>";
        }elseif(!filter_var($uemail, FILTER_VALIDATE_EMAIL)){
            $errs["email"] = "<span style='color: red'>Invalid email address</span>";
        }else{
            $crrUemail = $uemail;
        }

        if(empty($gndr)) {
            $errs["gndr"] = "<span style='color: red'>Please select your gender</span>";
        }elseif(!in_array($gndr, $genderList)){
            $errs["gndr"] = "<span style='color: red'>Paknami bondho korun</span>";
        }else{
            $crrGndr = $gndr;
        }

        if(count($skills) === 0){
            $errs["skill"] = "<span style='color: red'>Please select your skills</span>";
        }else{
            foreach($skills as $skill){
                if(!in_array($skill, $skillList)){
                    $errs["skill"] = "<span style='color: red'>Har baap ka ek baap hota hey!</span>";
                }
            }
            if(!isset($errs["skill"])){
                $crrSkills = $skills;
            }
        }


        if(isset($crrUname) && isset($crrUemail) && isset($crrGndr) && isset($crrSkills)){
            foreach($crrSkills as $sk){
                $skillText .= "$sk ";
            }
            $msg = "
                <p style='color: green'>Your Name: $crrUname<br>Your Email: $crrUemail<br>Your Gender : $crrGndr <br> Skills : $skillText</p>
            ";
        }
    }
    function safuda ($data) {
        if(gettype($data) === "string"){
            $kata = htmlspecialchars($data);
            $data = trim($kata);
            $data = stripslashes($data);
            return $data; 
        }
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
</head>
<body>
    <form action="./<?= basename($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="text" placeholder="Your Name" name="uname" value="<?= $uname ?? null; ?>">
        <br><br>
        <input type="text" placeholder="Email Address" name="uemail"  value="<?= $uemail ?? null; ?>">
        <br><br>
        Gender :
        <input type="radio" name="gndr" value="Male" <?= (isset($crrGndr) && $crrGndr === "Male")? "checked":null ?>>Male
        <input type="radio" name="gndr" value="Female" <?= (isset($crrGndr) && $crrGndr === "Female")? "checked":null ?>>Female
        <br><br>
        Skills :
        <input type="checkbox" value="HTML" name="skill[]" <?= (isset($skills) && count($skills) > 0 && in_array("HTML", $skills))? "checked":null ?>>HTML
        <input type="checkbox" value="CSS" name="skill[]" <?= (isset($skills) && count($skills) > 0 && in_array("CSS", $skills))? "checked":null ?>>CSS
        <input type="checkbox" value="JS" name="skill[]" <?= (isset($skills) && count($skills) > 0 && in_array("JS", $skills))? "checked":null ?>>JS
        <input type="checkbox" value="PHP" name="skill[]" <?= (isset($skills) && count($skills) > 0 && in_array("PHP", $skills))? "checked":null ?>>PHP
        <br><br>
        <input type="submit" name="sub123">
    </form>
    <?php 
        foreach($errs as $err){
            echo $err."<br>";
        }
    ?>
    <?= $msg ?? null ?>
</body>
</html>