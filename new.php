<?php


if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   $Customer_Id = $_POST['Customer_Id'];
    $Password = $_POST['Password'];
   
   
   $query = "UPDATE `customer_detalis` SET `Password`='".$Password."'WHERE `Customer_Id` = $Customer_Id";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo ' Password Updated';


   }else{
       echo 'Password Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title> </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="new.php" method="post">
         <div class="input-group">
      <label>Enter Your Customer_Id</label>
      <input type="text" name="Customer_Id" value="">
    </div>
 <div class="input-group">
      <label>Give New Password</label>
      <input type="text" name="Password" value="">
    </div>
    <div class="input-group">
      <button class="btn" type="submit" name="update" >Update</button>
       <a href="mainhome.php" class="btn">Home</a>
    </div>

    
  </form>

  </div>
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
