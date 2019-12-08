<!DOCTYPE html>
<html dir="ltr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0">
	<title>Welcome to Anti Theft Security System</title>
		<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

<?php
require_once ("getll.php");
?>	
</head>

<body ontouchstart="" style="background-color:#EBEBEB">
<!-- Start css3menu.com BODY section -->
<input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
<ul id="css3menu1" class="topmenu">
	<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
	<li class="topfirst"><a href="welcome.php" style="height:32px;line-height:32px;"><img src="CSS3 Menu_files/css3menu1/home.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="https://www.google.co.in/maps/place/<?php echo $latitude; echo ",".$longitude; ?>" style="height:32px;line-height:32px;"><img src="CSS3 Menu_files/css3menu1/find.png" alt=""/>Search for Phone</a></li>
	<li class="topmenu"><a href="#" style="height:32px;line-height:32px;"><img src="CSS3 Menu_files/css3menu1/bservice.png" alt=""/>My Account</a></li>
	<li class="topmenu"><a href="about.php" style="height:32px;line-height:32px;"><img src="CSS3 Menu_files/css3menu1/smile.png" alt=""/>About</a></li>
	<li class="toplast"><a href="logout.php" style="height:32px;line-height:32px;"><img src="CSS3 Menu_files/css3menu1/blue-arrow1 upright.png" alt=""/>Log Out</a></li>
</ul><p class="_css3m"><a href="http://css3menu.com/">bootstrap menu</a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section -->

</body>
</html>
