<?php
require_once("conn.php");
 header('Content-type : bitmap; charset=utf-8');
 echo "welcome"; 
 if(isset($_POST["encoded_string"])){
 	
	$encoded_string = $_POST["encoded_string"];
	$image_name = $_POST["image_name"];
	$username=$_POST["username"];
	$decoded_string = base64_decode($encoded_string);
	
	$path = 'images/'.$image_name;
        
	
	$file = fopen($path, 'wb');
	
	$is_written = fwrite($file, $decoded_string);
	fclose($file);
	
	
		
		
		$sql = "UPDATE user set image_path='".$path."' where username='".$username."';";
		
		$result=$conn->query($sql) ;
		
		if($result){
			echo "success";
		}else{
			echo "failed";
		}
		
		mysqli_close($connection);
	
 }
?>