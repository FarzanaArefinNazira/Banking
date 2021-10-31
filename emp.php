<?php
  
  $db = mysqli_connect("localhost", "root", "", "");

 
  $msg = "";

  
  if (isset($_POST['upload'])) {
  
  	$image = $_FILES['image']['name'];
  
  	

  	$target = "images/".basename($image);

  	$sql = "INSERT INTO emp_doc (image) VALUES ('$image')";
  	
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  	
    header("location:Emplogin.php");
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM emp_doc");
?>
<!DOCTYPE html>
<html>
<head>
<title>upload Bank Statement</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 50px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 50px auto;
   }
   form div{
   	margin-top: 10px;
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
 
  <form method="POST" action="emp.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
       <p> <b>Upload Your Photo ID which is given by bank(keep that ID personal  Becuase that contains your NID number</p>
  	  <input type="file" name="image">
  	</div>
  	
  	<div>
  		<button type="submit" name="upload" color="blue">Submit</button>
      <button type="cancel" name="upload" color="blue">Cancel</button>
    </div>
  	</div>
  </form>
</div>
</body>
</html>