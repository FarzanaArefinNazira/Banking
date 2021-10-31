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
     <h1 class="text-success">Contact with our customer service for resetting your password </h1>
     ';
    }
   }

   

   ?>
   <h1><span class="colorchange"><br> 
 Call us on 01798585194  to  get new pin number never try with wrong password other you will have a security issue</span>.<br>
      </h1>
       
         
         
      
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



   
  