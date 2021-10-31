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
      $Customer_Id=$_POST['Customer_Id'];
          $Name=$_POST['Name'];
          $Bu=$_POST['Bu'];
$Website_name=$_POST['Website_name'];

          $Payment_Method=$_POST['Payment_Method'];
          $address=$_POST['address'];
          $Ap=$_POST['Ap'];
          $City=$_POST['City'];
          $State=$_POST['State'];  
          $Zip=$_POST['Zip'];
    
     $sql="INSERT INTO website(Customer_Id,Name,Bu,Website_name,Payment_Method,address,Ap,City,State  ,Zip) VALUES (?,?,?,?,?,?,?,?,?,?)";
     $stmtinsert=$db->prepare($sql);
     $result=$stmtinsert->execute([$Customer_Id,$Name,$Bu,$Website_name,$Payment_Method,$address,$Ap,$City,$State ,$Zip]);
     if($result)
     {
     header('Location:b.php');
    
     }
     else {
      echo 'There are error while saving data';
     }
    }
    ?>
    </div>
<div>
    <form action="b.php" method="post">
      <div class="cointainer">

        <div  class="col">
          <div class="col-md">
       <label for="Customer_Id"><b>Customer_Id</b></label>
          <input class="form-control" type="text" name="Customer_Id"  required>
      <label for="Name"><b>Your Full Name you are using as a CEO in Company</b></label>
          <input class="form-control" type="text" name="Name"  required>
           <label for="Bu"><b>What  Kind of business you are doing?</b></label>
          <input class="form-control" type="text" name="Bu"  required>
         <label for="Website_Name"><b>Have any website related to your business?</b></label>
          <input class="form-control" type="text" name="Website_name"  required>
         <label for="Payment_Method"><b>If Any Payment_Method your customer use to pay you </b></label>
         <br>
          <input type="radio" name="Payment_Method" value="bkash">bkash<br>
          <input type="radio" name="Payment_Method" value="rocket">Rocket<br>
          <label for="address"><b>Address</b></label>
          <input class="form-control" type="text" name="address" required>
          <label for="Ap"><b>Apartment/shop/market address</b></label>
         <input class="form-control" type="text" name="Ap" required>
       
            <label for="City"><b>City</b></label>
         <input class="form-control" type="text" name="City" required>
           <label for="State"><b>State</b></label>
         <input class="form-control" type="text" name="State" required>
          <label for="Zip"><b>Zip</b></label>
         <input class="form-control" type="text" name="Zip" required>
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