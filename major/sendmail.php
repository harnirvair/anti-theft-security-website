<?php
// the message
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$message=$message."\n\nRegards\n".$name."\n".$email;
$message = wordwrap($message,70);

mail("harnirvair@gmail.com","New Message From ".$name,$message);
header("Location: welcome.php");
?>