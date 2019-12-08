<?php
    require_once("conn.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
	
    $password = md5($_POST["password"]);
    $EnteredUsername=$username;
	}
	
	
    $statement = "SELECT * FROM user WHERE username='".$username."' AND password ='".$password."';";
    $result=$conn->query($statement);
    
    
    $response = array();
    $response["success"] = false;  
    
    if($result->num_rows>0){
		
        $response["success"] = true;  
        
      //  $response["password"] = $password;
    }
	
	if($response["success"] == true){
	 session_start();
	 $_SESSION['username'] = $username;
	
		echo $_SESSION['username'];
	
		header("Location: welcome.php");
	}
	else
	{
		header("Location: index.php?error=invalid-details&user=".$EnteredUsername);
		
	}
?>