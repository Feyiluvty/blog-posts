<?php
	error_reporting(E_ALL & ~E_NOTICE);
	?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Blog Posts</title>
	 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">DE MIDA$ XPRESS BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	<h1 style="text-align: center"></h1>

	

	 <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
        	<?php
	include_once("conn.php");
	$sql ="SELECT DISTINCT * FROM posts ORDER BY id DESC";
	$result = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_array($result)) {
		$title = $row["title"];
		$content = $row["content"];
		$date = $row['date'];
		$img = $row['img'];

	
		echo'
          <h1 class="my-4">
          '.$title.'
	</h1>

          <div class="card mb-4">

           <img class="card-img-top" src="http://placehold.it/750x300" alt='.$img.'>         <div class="card-body">
             <p class="card-text">'.$content.'</p>
			<h5 style="color: #3a5fcd"> '.$date.'</h5 >
              <!-- <a href="#">Start Bootstrap</a> -->
            </div>
          </div>

		<br/>';
	}
		?>
		<a href="login.php">Admin</a>


		 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container-fluid">
        <p class="m-0 text-center text-white">Copyright &copy; BOSSLADY 2018</p>
      </div>
      
    </footer>

      <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>