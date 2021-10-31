<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
  header('Location: Loginn.php');
  exit;
}
//include('authenticate.php');
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = '';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt= $con->prepare('SELECT Account_Id,Customer_Id, Account_Number,Balance FROM deposit WHERE Account_Id = ?');


$stmt->bind_param('i', $_SESSION['Account_Id']);
$stmt->execute();
$stmt->bind_result($Account_Id,$Customer_Id,$Account_Number,$Balance);

$stmt->fetch();
if(isset($_POST['create'])){
       
        
        $withdraw_Amount=$_POST['withdraw_Amount'];
     


       $sql="SELECT Customer_Id FROM deposit";
        if($Balance>=$withdraw_Amount)
        {
       $sql="INSERT INTO deposit(Account_Id,Customer_Id,Account_Number,withdraw_Amount,Balance) VALUES (?,?,?,?,?)";
     

     $stmtinsert=$db->prepare($sql);
     $result=$stmtinsert->execute([$Account_Id,$Customer_Id,$Account_Number,$withdraw_Amount,$Balance=$Balance-$withdraw_Amount]);
      $sql = "UPDATE account_detalis SET Amount =  '$Balance'          
            WHERE Customer_Id= '$Customer_Id'";
            $stmtinsert=$db->prepare($sql);
    
     $result=$stmtinsert->execute([$Account_Id,$Customer_Id,$Account_Number,$withdraw_Amount,$Balance=$Balance-$withdraw_Amount]);
}
else if($withdraw_Amount>$Balance)
{
 echo 'Not enough Money Withdraw failed Please Give Correct Value';
}
$stmt->close();
}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link href="loginstyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  </head>
  <body class="loggedin">
    <nav class="navtop">
      <div>
        <h1>Your personal information is secure and safe</h1>
        <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
      </div>
    </nav>
    <div class="content">
      <h2>Profile Page</h2>
      <div>
        <p>Your profile details are below:</p>
        <table>

          <tr>
            <td>Account_Id:</td>
          <td><?=$Account_Id?></td>
          </tr>
          
          <tr>
            <td>Customer_Id:</td>
          <td><?=$Customer_Id?></td>
          </tr>
          <tr>
            <td>Balance:</td>
            <td><?=$Balance?></td>
          </tr>
          <tr>
            <td>Balance:</td>
              <td><?=$Balance?></td>
            </tr>
            <div class="input-group">
      <label>Withdraw Amount</label>
      <input type="text" name="withdraw_Amount" value="">
    </div>
            
        
        
          <div class="input-group">
      <button class="btn" type="submit" name="create" >Withdraw</button>
        &nbsp;&nbsp;&nbsp;<a href="mainhome.php" class="btn"> Cancel</a>
    </div>

  
        </table>
      </div>
    </div>
    <style>
      .btn-full{

  background-color:green;
  color : white;
  margin-left: 600px;
  border:1.5px solid #FFA500



}
</style>
  </body>
</html>