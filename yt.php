<?php
require_once('config.php');
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
        $Bank_Name=$_POST['Bank_Name'];
        $accn=$_POST['accn'];

        $Withdraw=$_POST['Withdraw'];
        //$Balance=$_POST['Balance'];
        
        $Sql="SELECT Amount FROM account_detalis WHERE Amount=Amount>$Withdraw WHERE acc=$accn";


       
      if('Amount'>$Withdraw){
       $sql="INSERT INTO transaction(Bank_Name,accn,Withdraw) VALUES (?,?,?)" ;
     $stmtinsert=$db->prepare($sql);
    
   $result=$stmtinsert->execute([$Bank_Name,$accn,$Withdraw]);
        
             $sql = "UPDATE account_detalis SET Amount = Amount-$Withdraw WHERE accn=$accn";  

            // $sql = "SELECT Amount account_detalis WHERE Amount = 'Amount'+'$Deposit_Amount'";      
     
        
      
     

     $stmtinsert=$db->prepare($sql);
    
     $result=$stmtinsert->execute([$Bank_Name,$accn,$Withdraw]);
   }
   else
   {
    echo 'The Balance you have entered does not match your current account Balance';
   }

  

    //header('Location: deposit.php?insert=sucess');



      

if($result)
     {
  


     echo '<script>swal("Sucessfully withdraw from your account ")</script>';


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

        <form action="withdraw.php" method="post">
         <div class="input-group">
        
      
<div class="input-group">
      <label>Bank_Name</label>
      <input type="text" name="Bank_Name" value="">
    </div>
        
    <div class="input-group">
      <label>Your Bank Account_Number</label>
      <input type="text" name="accn" value="">
    </div>
   
    <div class="input-group">
      <label>Withdraw Amount</label>
      <input type="text" name="Withdraw" value="">
    </div>
  
    <div class="input-group">
      
  <div class="input-group">
      <button class="btn" type="submit" name="create" >Withdraw</button>
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