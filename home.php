<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location:Loginn.php');
  exit;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to your profile</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="loginstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
   <link rel="stylesheet" type="text/css" href="css/homestyle.css">

  </head>
  <body class="loggedin">

    

    <nav class="navtop">
      <div>
        <h1>ipay</h1>
       
        <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
       
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
      </div>
    </nav>
    <div class="content">
      <h2>Thanks for joining us</h2>
      <p>Welcome back, <?=$_SESSION['Email']?>!</p>
    </div>
  </body>
</html>