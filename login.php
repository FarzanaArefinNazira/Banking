<?php

session_start();

if(isset($_SESSION["user_id"]))
{
 header("location:home.php");
}
include('database_connection.php');
?>

<!DOCTYPE html>
<html>
 <head>
  <title>PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="http://code.jquery.com/jquery.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Welcome</h3>
   <br />

   <?php
   if(isset($_GET["register"]))
   {
    if($_GET["register"] == 'success')
    {
     echo '
     <h1 class="text-success">Email Successfully verified, Registration Process Completed...</h1>
     ';
    }
   }

   

   ?>
   <h1><span class="colorchange">Now<br> 
 Click the  Next button upload your national_id card and  </span>.<br>
      </h1>
       
         <a href="image.php" class="btn btn-full">Next</a>
         
      
      </h1>
         
          <style>
            .btn-full
            {
           background-color:lightblue;
          color : black  ;
          position:center;
         
         border:2px solid #FFA500
            }
            h1{
  color:blue;
  font-size:240%;
  word-spacing: 5px;
  letter-spacing: 3px;
  margin-bottom: 20px;
  text-transform: uppercase;
  font-weight:200px;


}
</style>



   
  