<?php  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fName = $_FILES['myFile']['name'];
        $tmpName = $_FILES['myFile']['tmp_name'];
        if(empty($fName[0])){
            echo "<script>alert('Please choose a file')</script>";
        }else{
            for ($i=0; $i < count($fName); $i++) { 
                if(!getimagesize($tmpName[$i])){
                echo "<script>alert('Invalid image file')</script>";
                }else{ 
                    if (!is_dir("images")) {
                        mkdir("images");
                    }
                    $alfa = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
                    $direction = "images/".str_shuffle(substr($alfa, 0, 6).date("hisMdYDl")).uniqid().$fName[$i];
                    $move = move_uploaded_file($tmpName[$i], $direction);
                    if(!$move){
                        echo "<script>alert('Image upload problem')</script>";
                    }else{
                    echo "<script>alert('Image upload successfully')</script>"; 
                    }
                }
            }
        }
    }
?>
<form action="" method="post" enctype="multipart/form-data" >
    <input type="file" name="myFile[]" multiple>
    <input type="submit" value="Upload File">
</form>