<?php

if(isset($_POST["Customer_Id"]))
{
 include("d.php");
 $Customer_Id = mysqli_real_escape_string($connect, $_POST["Customer_Id"]);
 $Type = mysqli_real_escape_string($connect, $_POST["Type"]);
 $Description = mysqli_real_escape_string($connect, $_POST["Description"]);
 $Amount = mysqli_real_escape_string($connect, $_POST["Amount"]);
 $query = "
 INSERT INTO loan_apply(Customer_Id,Type,Description, Amount)
 VALUES ('$Customer_Id', '$Type','$Description', '$Amount')
 ";
 mysqli_query($connect, $query);
}
?>