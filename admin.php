
<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();

	

//global $db;
	if (isset($_SESSION['username'])) {
		$username = ucfirst($_SESSION['username']);
		if (isset($_POST['submit'])){
		
			$title = $_POST['title'];
			$content = $_POST['content'];
			$date = date('Y/m/d H/i/s');
			$deleted = $_POST['deleted'];
			$authorID = $_POST['authorID'];
			$img = $_FILES['img']['name'];
			$Target="upload/".basename($img);
			
			
			$db = mysqli_connect('localhost', 'feyiblog', 'feyisayo', 'post');

			$sql = "INSERT INTO posts (title, content, date, deleted, authorID, img) VALUE ('$title', '$content', '$date', '$deleted', '$authorID', '$img')";
			mysqli_query($db, $sql) or die("Error:" .mysqli_error($db));
			move_uploaded_file($_FILES['img']['tmp_name'],$Target);
			echo "Blog entry posted";
			// var_dump($_POST);
		}

	} else {
		header('location: login.php');
		die();

	}


?>		
<!DOCTYPE html>
<html>
<head>
	<title>Create blog post</title>
	<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="blog" content="articles & posts">
		<meta name="BOSSLADY" content="Educational content">


	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="csss/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="csss/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="csss/animate.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>
</head>
<body style="background-image: url(hero-bg-01.jpg);">
<div class="header" ><h2 style="font-size: 300%; text-align: center">Create new post</h2></div>
	<form method="POST" action="admin.php" enctype="multipart/form-data">

		<div class="input-group" style="text-align: center">
		<!-- <label>authorID</label> -->
		<input type="hidden" name="authorID">
		</div>
		<!-- string date ( string $format [, int $timestamp = time() ] ); -->
		<div class="input-group" style="text-align: center !important; margin-left: 28%">
			<label>Title</label>
			<input type="text" name="title" placeholder="Enter title here">
		</div>
		<div class="input-group" style="text-align: center; margin-left: 25%">
			<label>Content</label>
			<textarea placeholder="Content to be posted" style="height: 250px; width: 40%" name="content" type="text" ></textarea>
		</div>
		<div class="input-group" style="text-align: center">
			<?php
		$date = date('Y/m/d H/i/s');
		?>
			
		</div>
		<div class="input-group" style="text-align: center; margin-left: 83px; border: 5px; border-radius: 5px solid #800080"">
			<label>Choose an image to upload:</label><br>
<input type="file" name="img" src="http://placehold.it/750x300" alt="" />
		</div>

		
		<button type="submit" name="submit" class="btn" style="border:30px 30px 30px 30px">Post blog entry</button>

	</form>

	<br/>
<div style="font-size: 200%; color: black; text-decoration: none">
<a href="index.php" style="font-size: 200%">View home page</a> | <a href="logout.php" style="font-size: 200%">Logout</a>
</div>

</body></html>
