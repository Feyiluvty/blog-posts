<?php include('conn.php');  ?>
<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start(); 

	if ($_POST['submit']) {
		$dbUsername = "feyiblog";
		$dbPassword = "feyisayo";

		$username = strip_tags($_POST["username"]);
		$username = strtolower($username);
		$password = strip_tags($_POST["password"]);

		if ($username ==  $dbUsername && $password == $dbPassword) {
			$_SESSION['username'] = $username;
			header('location: admin.php');
		} else {
			echo "Wrong username or password.";
		}
	}

  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<title>Login page</title>
  	<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="blog" content="articles & posts">
		<meta name="BOSSLADY" content="Educational content">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	
	
	<link rel="stylesheet" type="text/css" href="./style1.css">
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="csss/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="csss/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="csss/animate.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div  class="limiter">
		
	<div class="container-login100" style="background-image: url('bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="login.php">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						<p style="text-align: center; color: #7171c6; font-size: 100%">De Mida$ Xpress Blog</p>
						Log in
					</span>
 
 		
 			<!-- <div class="input-group">
				<label>Username</label>
				<input type="text" name="username"> 
			</div>
			
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password"> 
			</div> -->

			<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

			<div class="container-login100-form-btn">
				 <button type="submit" name="login" class="login100-form-btn">Login</button>
			</div>
			<p style="font-size: 200%; color: #121212 !important">
				
				Not yet a member? <a href="register.php" style="text-decoration: none; font-size: 100%; color: #8b3626">Sign up</a>
			</p>
		</form>
</div>

	</div>
		
		</div>


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

  </body>
  </html>