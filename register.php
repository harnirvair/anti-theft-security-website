<?php
    require_once("conn.php");
    
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
	$primaryno = $_POST["primaryno"];
	$alternateno = $_POST["alternateno"];
	$email = $_POST["email"];

	$checkuser= "Select username from user where username = '".$username."';";
	$result=$conn->query($checkuser);
	
	
    $response = array();
    $response["success"]=false;
	$response["userexists"] = false;  
	if($result->num_rows>0){
		$response["userexists"]=true;
		echo json_encode($response);
	}
	else{	
	$statement ="INSERT INTO user (username, password, primary_number, alternate_number, email) VALUES ('".$username."', '".$password."', '".$primaryno."', '".$alternateno."', '".$email."')";
	$result=$conn->query($statement);
    $response["success"] = true;
	echo json_encode($response);
	}
	?>