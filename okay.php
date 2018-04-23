<?php include('conn.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body style="background-image: url(hero-bg-01.jpg);">
  <!--  <h1 style="text-align: center"> Welcome,  </h1> -->
    <?php
    if (isset($_SESSION["username"])): ?>
				<h1 style="text-align: center"><p>Welcome <b><?php echo $_SESSION['username']; ?></b></p></h1>
				<?php endif ?>
  
    






   <a href="admin.php" style="font-size: 180%; color: #ccc">Create new post</a> | <a href="logout.php" style="font-size: 180%; color: #ccc">Logout</a>
</body>
</html>
