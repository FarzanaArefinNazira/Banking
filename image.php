<?php
  
  $db = mysqli_connect("localhost", "root", "", "ipay");

 
  $msg = "";

  
  if (isset($_POST['upload'])) {
  
  	$image = $_FILES['image']['name'];
  
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	$target = "images/".basename($image);

  	$sql = "INSERT INTO customer_detalis(image,image_text) VALUES ('$image', '$image_text')";
  	
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  	
    header("location:Loginn.php");
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM  customer_detalis");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
 
  <form method="POST" action="image.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <p> Answer this security question<br>plz do not give any wrong answer otherwise you have to face issue about banned </p>
      <p><b> What is your childhood bestfriend name?</b></p>

      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder=" "></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload" color="blue">Submit</button>
  	</div>
  </form>
</div>
</body>
</html>