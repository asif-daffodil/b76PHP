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
?>
        <h2>Do you realy want to delete student?</h2>
        <a href="index.php"><button>No</button></a>
        <form action="" method="post" style="display: inline;">
            <button type="submit" name="del123">Yes</button>
        </form>
<?php
    }
}

if (isset($_POST['del123'])) {
    $del = $conn->query("DELETE FROM `students` WHERE `id` = $id");
    if ($del) {
        echo "<script>alert('student deleted successfully');location.href='index.php'</script>";
    } else {
        echo "<script>alert('something went wrong');location.href='index.php'</script>";
    }
}
