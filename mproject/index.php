<!DOCTYPE html>
<?php
$error="";
if(isset($_GET["error"])){
	$error = "<font color='red'>Invalid Details</font>";
}
?>

<html >
  <head>
    <meta charset="UTF-8">
    <title>Anti Theft Security System</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
    
  </head>

  <body>

    
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>AntiTheft Mobile Security System</h1><span>Developed by Harnirvair, Prateek, Inderpreet, Vikas </span>
</div>
<div class="rerun"><a href="">Reload</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="login.php" method="POST">
      <div class="input-container">
        <input type="text" name="username" id="username" value="<?php if(isset($_GET['user'])) echo $_GET['user']?>" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" id="password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      
	  </div>
	  <center><?php echo $error; ?></center><br>
      <div class="button-container">
				<button type="submit"><span>Go</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    
	<h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form>
      <div class="input-container">
        <input type="text" name="username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
	 
      <div class="button-container">
        <button><span>Next</span></button>
      </div>
    </form>
  </div>
  
</div>
<!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="http://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
  </body>
</html>
