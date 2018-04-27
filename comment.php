<!DOCTYPE html>
<html>
<head>
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery-slim.min.js"></script>
</head>
<body>
  <?php
$db = mysqli_connect('localhost', 'feyiblog', 'feyisayo', 'post');
$sql ="SELECT DISTINCT * FROM comment ORDER BY id DESC";
$result = mysqli_query($db, $sql);
  while ($row = mysqli_fetch_array($result)) {
    $parentid= $row['parentid'];
    $comments= $row['comments'];
    $sender= $row['sender'];
    $date= $row['date'];
    ?>

    <form method="POST" action="comment.php" class="login100-form">
      <div class="input-group input100">
    <input type="text" name="comment_name" placeholder="Enter name">
    </div>
    <div class="input-group input100">
      <textarea name="comment_content" placeholder="Enter coment" rows="5"></textarea>
    </div>
    <div  class="container-login100-form-btn">
    <input type="submit" name="submit" class="login100-form-btn" value="submit">
    
  </div>
</form>
<span id="comment_message"></span>
<br/>
<div id="display_comment"></div>


<script>
  $(document).ready(function(){
      $('#comment_form').on('submit', function(event){
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
              url:"add_comment.php",
              method:"POST",
              data: form_data,
              datataType:"JSON",
              success:function(data){
                  if (data.error != '') {
                    $('#comment_form')[0].reset();
                    $('#comment_message').html(data.error);
                  }
              }
            });

      });


  });



</script>
</body>
</html>