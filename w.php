<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: Loginn.php');
	
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = '';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt= $con->prepare('SELECT Customer_Id, Name, Bu, Website_name,Payment_Method,address,Ap,City,Street,Zip FROM website WHERE Customer_Id = ?');


$stmt->bind_param('i', $_SESSION['Customer_Id']);
$stmt->execute();
$stmt->bind_result($Customer_Id,$Name, $Bu,$Website_name,$Payment_Method,$address,$Ap,$City,$Street,$Zip);
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
				<a href="w.php"><i class="fas fa-user-circle"></i>Business Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your profile details are below:</p>
				<table>

					<tr>
						<td>Customer_Id:</td>
					<td><?=$Customer_Id?></td>
					</tr>
					
					<tr>
						<td>Name:</td>
					<td><?=$Name?></td>
					</tr>
					<tr>
						<td>Bu:</td>
						<td><?=$Bu?></td>
					</tr>
					<tr>
						<td>Website_name:</td>
							<td><?=$Website_name?></td>
						
					</tr>
					<tr>
						<td>Payment_Method:</td>
							<td><?=$Payment_method?></td>
						
					</tr>
					<tr>
						<td>address:</td>
							<td><?=$address?></td>
						
					</tr>
					<tr>
						<td>Ap:</td>
							<td><?=$Ap?></td>
						
					</tr>
					<tr>
						<td>City:</td>
							<td><?=$City?></td>
						
					</tr>
						<tr>
						<td>State:</td>
							<td><?=$State?></td>
						
					</tr>
				
					<tr>
						<td>Zip:</td>
						<td><?=$Zip?></td>
					</tr>
					    
	
				</table>
			</div>
		</div>
	
		<style>
			.btn-full{

	background-color:green;
	color : white;
	margin-left: 600px;
	border:1.5px solid #FFA500



}
</style>
	</body>
</html>