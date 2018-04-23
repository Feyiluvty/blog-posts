<?php include('conn.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title>De Mida$ Xpress BLOG</title>
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


	<title>Sign up now for a world of innovation</title>
	<link rel="stylesheet" type="text/css" href="./style1.css">
	<link rel="stylesheet" type="text/css" href="csss/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="csss/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="csss/animate.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
</head>
<body style="background-image: url('testimonial-bg.jpg')">
<div  class="limiter">
		
	<div class="container-login100" style="background-image: url('testimonial-bg.jpg')">
			<div class="wrap-login100">
				<form method="POST" action="register.php" class="login100-form validate-form">
					<?php include('errors.php'); ?>
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						<p style="text-align: center; color: #800000 !important; font-size: 100%">De Mida$ Xpress Blog<!-- </p>
						Sign up -->
					</span>

	
<div class="header" style="text-align: center; font-size: 300%; color: #4f4f4f"><h2>Sign up</h2></div>
	<div class="container-fluid" class="col-md-6">
		 
		<!--  -->
		<div class="input-group input100 class="input100" type="text" name="username" placeholder="Username" style="text-align: center; color: #8b3a3a !important">
		<label>Username</label><span class="focus-input100"></span>
		<input type="text" name="username" value="<?php echo$username; ?>" >
		</div>
		
		<div class="input-group input100" style="text-align: center; color: #8b3a3a !important">
			<label>Email</label>
			<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" >
		</div>

		<!-- <div class="input-group" style="text-align: center">
			<label>Date joined</label>
			<input type="date" name="createdate"> 
		</div>
 -->

 		<?php 
			$date = date('Y/m/d');
			$db = mysqli_connect('localhost', 'feyiblog', 'feyisayo', 'post');

			$sql = "INSERT INTO users (createdate) VALUES ('$createdate')";
			mysqli_query($db, $sql);
			// var_dump($date);
			

		?>
		<div class="input-group input100" style="text-align: center; color: #8b3a3a !important">
				<label>Password</label>
				<input type="password" name="password"> 
			</div>
			<div  class="container-login100-form-btn">
		<button type="submit" name="join" class="login100-form-btn">
		Join</button>
	</div>
		<p style="font-size: 50%; color: #8b1a1a">
				
				Already a member? <a href="login.php" style="text-decoration: none; color: #e6e6e6; ">Sign in</a>
			</p>
		</form>
	</div>




	<script src="js/jquery-slim.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	
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