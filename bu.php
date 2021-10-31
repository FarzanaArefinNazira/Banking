<?php

?>

<!DOCTYPE html>


<html>
<head>
  <title>Account</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
  <div>
    <?php
    if(isset($_POST['create'])){
         
          $Customer_Name=$_POST['Customer_Name'];
     
 $cusphone=$_POST['cusphone'];
     
     $Customer_Email=$_POST['Customer_Email'];
    
     $sql="INSERT INTO add_cus(Customer_Name,cusphone,Customer_Email) VALUES (?,?,?)";
     $stmtinsert=$db->prepare($sql);
     $result=$stmtinsert->execute([$Customer_Name,$cusphone,$Customer_Email]);
     if($result)
     {
     header('Location:addcs.php');
    
     }
     else {
      echo 'There are error while saving data';
     }
    }
    ?>
    </div>

  <div>
    <form action="addcs.php" method="post">
      <div class="cointainer">

        <div  class="col">
          <div class="col-md">

    
        
         <label for="Customer_Name"><b>Customer_Name</b></label>
          <input class="form-control" type="text" name="Customer_Name"  required>
         <label for="Customer_phone_number"><b>Customer_phone_number</b></label>
          <input class="form-control" type="text" name="Customer_Phone_number" required>
          <label for="Customer_Email"><b>Customer_Email</b></label>
         <input class="form-control" type="email" name="Customer_Email" required>
         <hr class="mb-3">
        <input class="btn btn-primary"type="submit" name="create" value="Submit">
        
        <a href ="mainhome.php" class="btn btn-full">Home</a>

                <style>
  body {
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}

</style>
      </div>
    </div>
  </div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  if(function(){

    alert("hello");

    
  });

 

</script>
  </body>
  </html>