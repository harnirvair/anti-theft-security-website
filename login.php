<?php
    require_once("conn.php");
    
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    
    $statement = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'";
    $result=$conn->query($statement);  
  
    
    $response = array();
    $response["success"] = false;  
    
    while($row=$result->fetch_array()){
        $response["success"] = true;  
		      $response["primaryno"] = $row["primary_number"];
		$response["alternateno"] =$row["alternate_number"];
		$response["email"] =$row["email"];
		$response["username"] =$row["username"];
        $response["password"] =$row["password"];       
		$response["latitude"]=$row["latitude"];
		$response["longitude"]=$row["longitude"];
    }
    
    echo json_encode($response);
?>