<?php

require_once("session.php");
require_once("CSS3Menu.php");
?><br>
<?php echo "Welcome ".$_SESSION['username'];

?>

<img src="https://cdn0.iconfinder.com/data/icons/security-8/500/mobile-512.png" height = "60" width="60"/>
<form action="Logout.php">
<input type="submit" value="LogOUT"/>
</form>
<?php 

require_once("conn.php");
$username= $_SESSION['username'];

$sql = "SELECT imei from user where username = '".$username."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	   $imei = $row["imei"];
    }
} else {
	   $imei= "Not Available";
}
?>
Your IMEI Number is : <?php echo $imei;?> <br><br>
<br>
<b>What can you do with IMEI Number?</b><br><br>

Incase, your phone is stolen you can file an FIR along with your IMEI Number. With the help of this, the <br>
police will be able to track your phone through sim's IMEI Number.

<br>
<?php 
$sql = "SELECT image_path from user where username = '".$username."'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	   $img = $row["image_path"];
    }
} 
echo $img;
?><br><br>
<b>Latest Photo Clicked : </b><br><br>
<img src="../<?php echo $img?>"/>