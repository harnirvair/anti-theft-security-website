<?php
$servername = "mysql.hostinger.in";
$username = "u998429942_a";
$password = "1122334455";
$dbname = "u998429942_a";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
