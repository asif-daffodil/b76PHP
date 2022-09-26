<ul>
    <li><a href="index.php">All Student</a></li>
    <li><a href="add.php">Add Student</a></li>
</ul>

<form action="" method="post">
    <input type="text" placeholder="Student Name" name="sname">
    <input type="text" placeholder="Student City" name="scity">
    <input type="submit" value="Add Student" name="sub123">
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "b76simplecrud");
function safuda($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}
if (isset($_POST['sub123'])) {
    $sname = safuda($conn->real_escape_string($_POST['sname']));
    $scity = safuda($conn->real_escape_string($_POST['scity']));
    if (!empty($sname) && !empty($scity)) {
        $insert = $conn->query("INSERT INTO `students` (`name`, `city`) VALUES ('$sname', '$scity')");
        if ($insert) {
            header("location: index.php");
        }
    }
}

?>