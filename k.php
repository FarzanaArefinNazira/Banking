<?php
require_once('config.php');
?>

<!DOCTYPE html>


<html>
<head>
  <title>Account</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div>
    <?php
    if(isset($_POST['create'])){
        $Account_Id=$_POST['Account_Id'];
          
        $Customer_Id=$_POST['Customer_Id'];

        $Account_Number=$_POST['Account_Number'];

        $Deposit_Amount=$_POST['Deposit_Amount'];
        //$Balance=$_POST['Balance'];
        



       $sql="SELECT Customer_Id FROM deposit";
      //if($Balance=$Amount){
       $sql="INSERT INTO deposit(Account_Id,Customer_Id,Account_Number,Deposit_Amount) VALUES (?,?,?,?)" ;
     $stmtinsert=$db->prepare($sql);
    
   $result=$stmtinsert->execute([$Account_Id,$Customer_Id,$Account_Number,$Deposit_Amount]);
        
             $sql = "UPDATE account_detalis SET Amount = Amount+$Deposit_Amount  WHERE Customer_Id=$Customer_Id";  

            // $sql = "SELECT Amount account_detalis WHERE Amount = 'Amount'+'$Deposit_Amount'";      
     
        
      
     

     $stmtinsert=$db->prepare($sql);
    
     $result=$stmtinsert->execute([$Account_Id,$Customer_Id,$Account_Number,$Deposit_Amount]);
   //}
   //else
   //{
    //echo 'The Balance you have entered does not match your current account Balance';
   //}

  

    //header('Location: deposit.php?insert=sucess');



      

if($result)
     {
  


     


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

        <form action="k.php" method="post">
         <div class="input-group">
        
      <label>Enter Your Account_Id</label>
      <input type="text" name="Account_Id" value="">
    </div>

          <div class="input-group">
      <label>Enter Your Customer_Id</label>
      <input type="text" name="Customer_Id" value="">
    </div>
    <div class="input-group">
      <label>Account_Number</label>
      <input type="text" name="Account_Number" value="">
    </div>
   
    <div class="input-group">
      <label>Deposit Amount</label>
      <input type="text" name="Deposit_Amount" value="">
    </div>
  
    <div class="input-group">
      
  <div class="input-group">
      <button class="btn" type="submit" name="create" >Deposit</button>
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


  </body>
  </html>