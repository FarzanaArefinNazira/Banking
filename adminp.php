<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: report.php');
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

$stmt= $con->prepare('SELECT Admin_Id, First_Name, Last_Name,Street,City,State,Mobile_No,Date, Email,National_ID,Password FROM admin WHERE Admin_Id = "1"');


$stmt->bind_param('i', $_SESSION['Admin_Id']);
$stmt->execute();
$stmt->bind_result($Admin_Id,$First_Name,$Last_Name,$Street,$City,$State,$Mobile_No,$Date,$Email,$National_ID,$Password);
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
				<a href="adp.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="report.php"><i class="fas fa-home"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your profile details are below:</p>
				<table>

					<tr>
						<td>Admin_Id:</td>
					<td><?=$Admin_Id?></td>
					</tr>
					
					<tr>
						<td>First_Name:</td>
					<td><?=$First_Name?></td>
					</tr>
					<tr>
						<td>Last_Name:</td>
						<td><?=$Last_Name?></td>
					</tr>
					<tr>
						<td>Street:</td>
							<td><?=$Street?></td>
						
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
				
				         <td>Mobile_No:</td>
							<td><?=$Mobile_No?></td>
						
					</tr>
					
					<tr>
						<td>Date:</td>
							<td><?=$Date?></td>
						
					</tr>

					<tr>
						<td>National_ID:</td>
						<td><?=$National_ID?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$Email?></td>
					</tr>
					    <tr>
						<td>Password:</td>
						<td><?=$Password?></td>
						
					</tr>
					<a href="update.php" class="btn btn-full">Update Address</a>
					<br>
					<br>
					<a href="updatepassword.php" class="btn btn-full">Change password</a>
	
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