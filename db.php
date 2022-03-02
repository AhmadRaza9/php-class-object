<?php
$host = "localhost";
$username = "root";
$pass = "root";
$db_name = "class-php";

$connection = new mysqli($host, $username, $pass, $db_name);

if (!$connection) {
    die("Query Faield " . mysqli_error($connection));
}
// else {
//     echo "Connected";
// }
