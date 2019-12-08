<?php
require_once("conn.php");
$username= $_SESSION['username'];

$sql = "SELECT latitude, longitude FROM user where username = '".$username."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_array()) {
       $latitude = $row["latitude"];
	   $longitude = $row["longitude"];
    }
} else {
    echo "0 results";
}


?>  
