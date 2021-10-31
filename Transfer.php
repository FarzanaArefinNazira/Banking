<?php
require_once('config.php');
?>

<!DOCTYPE html>


<html>
<head>
  <title>Account</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <div>
    <?php
    if(isset($_POST['create'])){
        $Account_Id=$_POST['Account_Id'];
          
        $Customer_Id=$_POST['Customer_Id'];
$Transfer_Money=$_POST['Transfer_Money'];
      
       
       $sql="SELECT Amount FROM account_detalis,
       SELECT Transfer_Money FROM transfer SET Transfer_Money=Amount>$Transfer_Money";

       if('Amount'>=$Transfer_Money)
        {
      
       $sql="INSERT INTO transfer(Account_Id,Customer_Id,Transfer_Money) VALUES (?,?,?)";
       $stmtinsert=$db->prepare($sql);
    
     $result=$stmtinsert->execute([$Account_Id,$Customer_Id,$Transfer_Money]);
      
 
    // $sql="SELECT  Amount FROM account_detalis SET Amount='Amount+$Transfer_Money' WHERE Account_Id=$Account_Id'";
          $stmtinsert=$db->prepare($sql);
    
     $result=$stmtinsert->execute([$Account_Id,$Customer_Id,$Transfer_Money]);
      
             $sql = "UPDATE account_detalis SET Amount = Amount+$Transfer_Money WHERE Customer_Id=$Customer_Id";
            
    
       $stmtinsert=$db->prepare($sql);
    
     $result=$stmtinsert->execute([$Account_Id,$Customer_Id,$Transfer_Money]);
        $sql="UPDATE account_detalis SET Amount = Amount-$Transfer_Money WHERE Account_Id=$Account_Id"; 
           $stmtinsert=$db->prepare($sql);
    
     $result=$stmtinsert->execute([$Account_Id,$Customer_Id,$Transfer_Money]);
    
      }
      
else 

{

       echo '<script>swal("No You cannot Transfer Not Enough Money Plz give Correct Balance")</script>'; 

}
     

  
    
     
   //}
   //else
   //{
    //echo 'The Balance you have entered does not match your current account Balance';
   //}

  

    //header('Location: deposit.php?insert=sucess');



      

if($result)
     {
  


     echo '<script>swal("Succesfully transfered")</script>'; 


     }
     else {
      echo 'There are error while saving data';
     }
    }

  
    ?>
    </div>

     <!DOCTYPE html>

<html>

    <head>

        <title> </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="Transfer.php" method="post">
         <div class="input-group">
        
      <label>Enter your Account_Id</label>
      <input type="text" name="Account_Id" value="" required>
    </div>

          <div class="input-group">
      <label>Enter reciver Customer_Id</label>
      <input type="text" name="Customer_Id" value="" required>
    </div>
   
   
    <div class="input-group">
      <label>Transfer Amount</label>
      <input type="text" name="Transfer_Money" value="" required>
    </div>
      <div class="input-group">
    
    <div class="input-group">
      
  <div class="input-group">
      <button class="btn" type="submit" name="create" >Transfer</button>
        &nbsp;&nbsp;&nbsp;<a href="mainhome.php" class="btn"> Cancel</a>
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
</style>

  </body>
  </html>
  