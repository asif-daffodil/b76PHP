<ul>
    <li><a href="index.php">All Student</a></li>
    <li><a href="add.php">Add Student</a></li>
</ul>

<?php
$conn = mysqli_connect("localhost", "root", "", "b76simplecrud");
$select = $conn->query("SELECT * FROM `students`");
if ($select->num_rows > 0) {
    echo "<ul>";
    while ($data = $select->fetch_object()) {
        echo "<li>Name : $data->name, City : $data->city <a href='up.php?id=$data->id'><button>Update</button></a> <a href='del.php?id=$data->id'><button>Delete</button></a></li>";
    }
    echo "</ul>";
}
?>