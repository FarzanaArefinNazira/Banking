
<?php 
  
$user = 'root'; 
$password = '';  
  

$database = '';  
  
$servername='localhost'; 
$mysqli = new mysqli($servername, $user,  
                $password, $database); 
  

if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
  

$sql = "SELECT * FROM Customer_detalis  ORDER BY Customer_Id ASC "; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <title>User Details</title> 
   
    <style> 
        table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
    </style> 
</head> 
  
<body> 
    <section> 
        <h1></h1> 
        
        <table> 
            <tr> 
                <th>Customer_Id</th> 
                <th>First_Name</th> 
                <th>Last_Name</th> 
                <th>Street</th> 
                  <th>City</th> 
                <th>State</th> 
                <th>Mobile_No</th> 
                <th>Date</th>
                <th>Email</th> 
                <th>National_ID</th> 
                <th>user_datetime</th>
                

            </tr> 
            
            <?php   
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr> 
                <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN--> 
                <td><?php echo $rows['Customer_Id'];?></td> 
                <td><?php echo $rows['First_Name'];?></td> 
                <td><?php echo $rows['Last_Name'];?></td> 
                <td><?php echo $rows['Street'];?></td> 
                 <td><?php echo $rows['City'];?></td> 
                <td><?php echo $rows['State'];?></td> 
                <td><?php echo $rows['Mobile_No'];?></td> 
                <td><?php echo $rows['Date'];?></td> 
                 <td><?php echo $rows['Email'];?></td> 
                <td><?php echo $rows['National_ID'];?></td> 
                <td><?php echo $rows['user_datetime'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 
</body> 
  
</html> 