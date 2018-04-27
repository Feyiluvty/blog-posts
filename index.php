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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery-slim.min.js"></script>
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
		$id = $row['id'];
		$comment = $row['comment'];
		$commentdate= $row['commentdate'];
		include_once("com.php");

	
	
		echo'
         <a href="post.php?post_id='.$id.'"    style="text-decoration:none"> 
         <h1 class="my-4" style="color: black">
          '.$title.'
	</h1></a>

          <div class="card mb-4">

          <a href="post.php?post_id='.$id.'">
           <img class="card-img-top"  alt="'.$img.'" src="upload/'.$img.'"  />  </a>       <div class="card-body">
             <p class="card-text" >'.$content.'</p>
             <a href="post.php?post_id="'.$id.'"" class="btn btn-primary">View full post &rarr;</a>
			<h5 style="color: #3a5fcd"> '.$date.'</h5 >
            </div>
 			
   <div class="input-group" style="text-align: center">
			<div class="input-group" style="text-align: center">
			
		</div> 
		</div>
			
		</div>

			<button type="submit" name="post" class="btn">Post comment</button>
   
    
 
		<br/>';
	}
		?>
		  <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>
      <!-- /.row -->

      		</div>
      	</div>
      </div>
		<a href="login.php">Admin</a>


		 <!-- Footer -->
    <footer class="py-5 bg-dark col-lg-12" style="width: 100% !important">
      <div class="container">
        <p class="m-0 text-center text-white" >Copyright &copy; BOSSLADY 2018</p>
      </div>
      

    </footer>

      <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>