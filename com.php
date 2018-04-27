<?php
        		if (isset($_SESSION['username'])) {
				$username = ucfirst($_SESSION['username']);
				if (isset($_POST['post'])){
				$comment = $_POST['comment'];
				$commentdate = date('Y/m/d H/i/s');
				$db = mysqli_connect('localhost', 'feyiblog', 'feyisayo', 'post');

				$sql = "INSERT INTO posts (comment, commentdate) VALUE ('$comment', '$commentdate')";
				mysqli_query($db, $sql) or die("Error:" .mysqli_error($db));
				echo "comment published"; 
		}
	}
	


	 // $id = $_GET['post_id'];

	?>