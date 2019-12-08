<?php
 require_once("conn.php");
    
    $username = $_POST["username"];
	$location = $_POST["location"];
	$latitude = $_POST["latitude"];
	$longitude = $_POST["longitude"];
	$imei = $_POST["imei"];
	
    $statement = "UPDATE user SET location = '".$location."', latitude = '".$latitude."', longitude = '".$longitude."', imei = '".$imei."' Where username = '".$username."'";
	$result=$conn->query($statement);
	
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>