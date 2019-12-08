<?php
$servername = "localhost";
$username = "id9131477_a";
$password = "12345678";
$dbname = "id9131477_a";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
