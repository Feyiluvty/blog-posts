<?php
	session_start();
	$username = "";
	$createdate = "";
	$email = "";
	$errors =  array();
		$db = mysqli_connect('localhost', 'feyiblog', 'feyisayo', 'post');
		//public $db;

		if (isset($_POST['join'])) {
		$username = mysqli_real_escape_string($db, $_POST["username"]);
		$email = mysqli_real_escape_string($db, $_POST["email"]);
		// $createdate = mysqli_real_escape_string($db, $_POST["createdate"]);
		$password = mysqli_real_escape_string($db, $_POST["password"]);

		if (empty($username)) {
			array_push($errors, "Username is required"); // add error to errors array
		}
		if (empty($email)) {
			array_push($errors, "Email is required"); // add error to errors array
		}
		
		if (empty($password)) {
			array_push($errors, "Password is required"); // add error to errors array
		}
		$query = "SELECT * FROM users WHERE email = '$email'";
			$result = mysqli_query($db, $query);

			while($match = mysqli_fetch_array($result))
			{ var_dump($match);
				if($match != null) {
				
					array_push($errors, "This email is already taken");
         			$_SESSION['errors'] = $errors;
					header("Location: register.php");
				}
			}
			var_dump($errors);
			$date = date('Y/m/d H/i/s');
			// $db = mysqli_connect('localhost', 'feyiblog', 'feyisayo', 'post');

			// $sql = "INSERT INTO users (createdate) VALUES ('$createdate')";
			// mysqli_query($db, $sql);
		if (count($errors) == 0) {
			$password = md5($password);
			$sql = "INSERT INTO users (username, email, createdate, password) VALUES ('$username', '$email', '$date', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			
			header('Location: index.php'); // redirect to home page
				}
	}

	//log user from login page
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		
		$password = mysqli_real_escape_string($db, $_POST['password']);
		

		// ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required"); // add error to errors array
		}
		if (empty($password)) {
			array_push($errors, "password is required"); // add error to errors array
		}
		if (count($errors) == 0 ) {
			$password= md5($password);

			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				// log user in
				$_SESSION['username'] = $username;
				header('Location: okay.php'); // redirect to home page
			}else {
				array_push($errors, "Wrong username/password combination");

			}
		}
	}


// function getPosts() {
// 	// use global $conn object in function
// 	global $db;
// 	$sql = "SELECT * FROM posts WHERE  = true";
// 	$result = mysqli_query($db, $sql);

// 	// fetch all posts as an associative array called $posts
// 	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

// 	return $posts;
// }

?>