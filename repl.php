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
           $Reply=$_POST['Reply'];
          
     
    
    
     $sql="INSERT INTO reply(Customer_Id,Reply) VALUES (?,?)";
     $stmtinsert=$db->prepare($sql);
     $result=$stmtinsert->execute([$Customer_Id,$Reply]);
     if($result)
     {
    echo '<script>swal("Sucessfully  send reply message")</script>';
     }
     else {
      echo 'There are error while saving data';
     }
    }
    ?>
    </div>

  <div>
    <form action="repl.php" method="post">
      <div class="cointainer">

        <div  class="col">
          <div class="col-md">

        
        <hr class="mb-3">
        <label for="Customer_Id"><b> Customer Id</b></label>
          <input class="form-control" type="text" name="Customer_Id"  required>
          <label for="Reply"><b>Reply</b></label>
          <input class="form-control" type="text" name="Reply"  required>
         
        <input class="btn btn-primary"type="submit" name="create" value="Submit">
        
        <a href ="emphome.php" class="btn btn-full">Home</a>

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