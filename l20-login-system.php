<?php 
    session_start();
    $loginInfo = [
        "kamal"=>123456,
        "jamal"=>123456,
        "tomal"=>123456,
        "akmal"=>123456,
        "mal"=>123456,
    ];
    if (isset($_POST['log123'])) {
        $uname = safuda($_POST['uname']);
        $pass = safuda($_POST['pass']);

        if(empty($uname)){
            $errUser = "Please write your username";
        }elseif(!preg_match("/^[A-Za-z. ]*$/", $uname)){
            $errUser = "Invalid username";
        }else{
            $crrUser = $uname;
        }

        if(empty($pass)){
            $errPass = "Please write your password";
        }else{
            $crrPass = $pass;
        }

        if(isset($crrUser) && isset($crrPass)){
            if(isset($loginInfo[$crrUser]) && $loginInfo[$crrUser] == $crrPass){
                $_SESSION['uName'] = $crrUser;
            }else{
                $errMsg = "<div class='alert alert-danger alert-dismissible'><button class='btn-close' data-bs-dismiss='alert'></button>Invalid username or password</div>";
            }
        }
    }

    if(isset($_POST['lout123'])){
        session_unset();
    }
    function safuda ($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <?php  
        if(isset($_SESSION['uName'])){
    ?>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-6 m-auto border shadow rounded display-6 p-4 text-center">
                Welcome <span class="text-capitalize"><?= $_SESSION['uName']; ?></span>
                <form action="" method="post">
                    <button type="submit" class="d-block m-auto btn btn-warning my-3 btn-outline-dark" name="lout123">Logout</button>
                </form>
            </div>
        </div>
    </div>
    <?php }else{ ?>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-6 m-auto border shadow rounded p-4">
                <h2 class="mb-3">Login Form</h2>
                <form action="" method="post">
                    <div class="mb-3 form-floating">
                        <input 
                        type="text" 
                        placeholder="User Name" 
                        class="form-control 
                        <?= (isset($errUser))? "is-invalid":null ?>
                        <?= (isset($crrUser))? "is-valid":null ?>
                        " 
                        name="uname" 
                        value="<?= $uname ?? null; ?>"
                        >
                        <label for="">User Name</label>
                        <div class="valid-feedback">
                            Username is inputted currectly!
                        </div>
                        <div class="invalid-feedback">
                            <?= $errUser ?? null ?>
                        </div>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="password" placeholder="Password" 
                        class="
                        form-control
                        <?= (isset($errPass))? "is-invalid":null ?>
                        <?= (isset($crrPass))? "is-valid":null ?>
                        " 
                        name="pass"
                        value="<?= $pass ?? null ?>"
                        >
                        <label for="">Password</label>
                        <div class="valid-feedback">
                            Password is correct!
                        </div>
                        <div class="invalid-feedback">
                            <?= $errPass ?? null ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Login" name="log123" class="btn btn-primary">
                    </div>
                </form>
                <?= $errMsg ?? null; ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>