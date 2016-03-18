<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dob";

// connect to MySQL
$conn = mysqli_connect($host, $user, $pass) or die("Couldn't connect");
mysqli_select_db($conn, $db) or die("Couldn't find database");
?>