 c<?php

if(isset($_POST["views"]))
{
 include("d.php");
 if($_POST["views"] != '')
 {
  $update_query = "UPDATE loan_apply SET comment_status=1 WHERE comment_status=0";
  mysqli_query($connect, $update_query);
 }
 $query = "SELECT * FROM loan_apply ORDER BY Customer_Id DESC LIMIT 5";
 $result = mysqli_query($connect, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["Customer_Id"].'</strong><br />
     <strong>'.$row["Type"].'</strong><br />
     <small><em>'.$row["Description"].'</em></small>
     <small><em>'.$row["Amount"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM loan_apply WHERE comment_status=0";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notificationn'   => $output,
  'unseen_notificationn' => $count
 );
 echo json_encode($data);
}
?>

