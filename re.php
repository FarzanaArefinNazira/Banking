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


$stmt= $con->prepare('SELECT comment_subject, comment_text FROM comments WHERE comment_subject = "?" ');


//$stmt->bind_param('i', $_SESSION['comment_subject']);
$stmt->execute();
$stmt->bind_result($comment_subject, $comment_text);
$stmt->fetch();
$stmt->close();
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
			
			<div>
				<p>Your answer is below:</p>
				<div class="input-group">
				<table>

					<tr>
						<td>Customer_Id:</td>
					<td><?=$comment_subject?></td>
					</tr>
					
					<tr>
						<td>Answer:</td>
					<td><?=$comment_text?></td>
					</tr>
					
				</div>
					
				</table>
			</div>
		</div>
		<?php 
	if (isset($_GET['Update'])) {
		$Customer_Id = $_GET['Update'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM customer_detalis WHERE Customer_Id=$Customer_Id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$Customer_Id = $n['Customer_Id'];
			$Street = $n['Street'];
			$City = $n['City'];
			$State = $n['State'];
			$City = $n['City'];
			$Mobile_No = $n['Mobile_No'];

		}
	}
?>
		<style>
			.btn-full{

	background-color:green;
	color : white;
	margin-left: 600px;
	border:1.5px solid #FFA500



}


</style>
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