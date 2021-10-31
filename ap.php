<?php

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
          $Customer_Id=$_POST['Customer_Id'];
          $Type=$_POST['Type'];
            $Description=$_POST['Description'];
          $Amount=$_POST['Amount'];
  
     $sql="INSERT INTO loan_apply(Customer_Id,Type,Description,Amount) VALUES (?,?,?,?)";
     $stmtinsert=$db->prepare($sql);
     $result=$stmtinsert->execute([$Customer_Id,$Type,$Description,$Amount]);
     if($result)
     {
     header('Location:ap.php');
     }
     else {
      echo 'There are error while saving data';
     }
    }
    ?>
    </div>

  <div>
    <form action="ap.php" method="post">
      <div class="cointainer">

        <div  class="col">
          <div class="col-md">

        <h1>Fill your information very carefully</h1>
     <p> click on the home button for go back to homepage</p>
        <hr class="mb-3">
        <label for="Customer_Id"><b>Confirm your customer Id</b></label>
          <input class="form-control" type="text" name="Customer_Id"  required>
            <label for="Type">Loan Type</label><br>
                    
                    <input type="radio" name="Type" value="Car">Car<br>
          <input type="radio" name="Type" value="Home">Home<br>
         

         <label for="Description"><b>Reason For Applying Loan </b></label>
          <input class="form-control"   type="text" name="Description"  required>
          <label for="Amount"><b>The Loan Amount </b></label>
          <input class="form-control" type="text" name="Amount" required >
        
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




</script>
  </body>
  </html>