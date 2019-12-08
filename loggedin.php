<?php
   require_once("conn.php");
    
    $username = $_POST["username"];
    
   $sql="SELECT * FROM user WHERE username = '".$username."'";
    $result=$conn->query($sql);
	
    $response = array();
    $response["success"] = false;  
    
    while($row=$result->fetch_array()){
        $response["success"] = true;  
        $response["primaryno"] = $row["primary_number"];
		$response["alternateno"] =$row["alternate_number"];
		$response["email"] =$row["email"];
		$response["username"] =$row["username"];
        $response["password"] =$row["password"];
    }
    
    echo json_encode($response);
?>