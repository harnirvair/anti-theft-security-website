<?php
    require_once("conn.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
	
    $password = md5($_POST["password"]);
    $EnteredUsername=$username;
	}
    $statement = mysqli_prepare($conn, "SELECT * FROM user WHERE username = ? AND password = ?");
    mysqli_stmt_bind_param($statement, "ss", $username, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $userID, $username, $password, $primaryno, $alternateno, $email,$location,$latitude,$longitude);
    
    $response = array();
    $response["success"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
        $response["success"] = true;  
        $response["primaryno"] = $primaryno;
		$response["alternateno"] = $alternateno;
		$response["email"] = $email;
		$response["username"] = $username;
        $response["password"] = $password;
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