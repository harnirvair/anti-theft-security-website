<?php
require_once("conn.php");
$username= $_SESSION['username'];

$sql = "SELECT latitude, longitude FROM user where username = '".$username."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $latitude = $row["latitude"];
	   $longitude = $row["longitude"];
    }
} else {
    echo "0 results";
}


?>  
