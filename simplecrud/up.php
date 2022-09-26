<?php
$conn = mysqli_connect("localhost", "root", "", "b76simplecrud");
if (!isset($_GET['id'])) {
    header("location: index.php");
} else {
    $id = $_GET['id'];
    $check = $conn->query("SELECT * FROM `students` WHERE `id` = $id");
    if ($check->num_rows == 0) {
        header("location: index.php");
    } else {
        $preData = $check->fetch_object();
    }
}

function safuda($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}
if (isset($_POST['up123'])) {
    $sname = safuda($conn->real_escape_string($_POST['sname']));
    $scity = safuda($conn->real_escape_string($_POST['scity']));
    if (!empty($sname) && !empty($scity)) {
        $update = $conn->query("UPDATE `students` SET `name` = '$sname', `city` = '$scity' WHERE `id` =  $id");
        if ($update) {
            echo "<script>alert('student updated successfully');location.href='index.php'</script>";
        } else {
            echo "<script>alert('something went wrong');location.href='index.php'</script>";
        }
    }
}
?>
<h2>Update Student Data</h2>
<form action="" method="post">
    <input type="text" placeholder="Student Name" name="sname" value="<?= $sname ?? $preData->name ?? null ?>">
    <input type="text" placeholder="Student City" name="scity" value="<?= $scity ?? $preData->city ?? null ?>">
    <input type="submit" value="Update Student" name="up123">
</form>