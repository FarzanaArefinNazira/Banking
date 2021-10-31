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
          $Customer_Id=$_POST['Customer_Id'];
           $Bank_Name=$_POST['Bank_Name'];
          $Tr_mail=$_POST['Tr_mail'];
     
    $accn=$_POST['accn'];
     
     $Transaction_pass=$_POST['Transaction_pass'];
    
     $sql="INSERT INTO account_detalis(Customer_Id,Bank_Name,Tr_mail,accn,Transaction_pass) VALUES (?,?,?,?,?)";
     $stmtinsert=$db->prepare($sql);
     $result=$stmtinsert->execute([$Customer_Id,$Bank_Name,$Tr_mail,$accn,$Transaction_pass]);
     if($result)
     {
    echo '<script>swal("Sucessfully Adding a Bank account Now wait for 3 days for approve after giving permission")</script>';
     }
     else {
      echo 'There are error while saving data';
     }
    }
    ?>
    </div>

  <div>
    <form action="register.php" method="post">
      <div class="cointainer">

        <div  class="col">
          <div class="col-md">

        <h1>Add your personal information very carefully</h1>
        <p>(N.B Plz chose any account type  saving or checking)</p>
        <p> Give your transaction password safely</p>
        <p> After clicking Submit</p>
        <p>  Redirect you to the login page</p>
        <p> click on the home button for go back to homepage</p>
        <hr class="mb-3">
        <label for="Customer_Id"><b>Confirm your customer Id</b></label>
          <input class="form-control" type="text" name="Customer_Id"  required>
          <label for="Bank_Name"><b>Bank Name</b></label>
          <input class="form-control" type="text" name="Bank_Name"  required>
         <label for="Tr_mail"><b>Confirm your transaction Mail</b></label>
          <input class="form-control" type="text" name="Tr_mail"  required>
         <label for="accn"><b> Bank Account_Number</b></label>
          <input class="form-control" type="text" name="accn" required>
          <label for="Transaction_pass"><b>Transaction_pass</b></label>
         <input class="form-control" type="password" name="Transaction_pass" required>
         <hr class="mb-3">
        <input class="btn btn-primary"type="submit" name="create" value="Submit">
        
        <a href ="mainhome.php" class="btn btn-full">Home</a>

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