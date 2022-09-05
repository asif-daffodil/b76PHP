<?php  
    
    $conn = mysqli_connect("localhost", "root", null, "b76crud");
    // echo !$conn ? "Something went wrong":"Kaaz hoise"; 
    $allData = $conn->query("SELECT * FROM `students`")
   

    /* final class db {
        private static string $host = "localhost";
        private static string $user = "root";
        private static $pass = null;
        private static string $schema = "b76crud";
        private static object $conn;

        private function __construct()
        {
            return;
        }

        public static function dbConn (): object
        {
            db::$conn = mysqli_connect(db::$host, db::$user, db::$pass, db::$schema);
            return db::$conn;
        }

        public static function getData ($q) : object
        {
            return db::dbConn()->query($q);
        }
    }
    $query = "SELECT * FROM `students`";
    $allData = db::getData($query); */
?>

<table>
    <tr>
        <td>Name</td>
        <td>City</td>
    </tr>
    <?php  
        while ($data = $allData->fetch_object()) {
    ?>
        <tr>
            <td><?= $data->name ?></td>
            <td><?= $data->city ?></td>
        </tr>
    <?php
        }
    ?>
</table>
