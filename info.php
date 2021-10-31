<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: report.php');
	exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = '';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt= $con->prepare('SELECT Employee_Id, Bank_Name, Tr_mail,accn FROM emp_acc WHERE Employee_Id = ?');


$stmt->bind_param('i', $_SESSION['Employee_Id']);
$stmt->execute();
$stmt->bind_result($Employee_Id,$Bank_Name,$Tr_mail,$accn);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Account Page</title>
		<link href="loginstyle.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Your personal information is secure and safe</h1>
				<a href="info.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-home"></i>Home</a>
			</div>
		</nav>
		<div class="content">
			<h2></h2>
			<div>
				<p>Your Account details are below:</p>
				<table>

					<tr>
						<td>Employee_Id:</td>
					<td><?=$Employee_Id?></td>
					</tr>
					
					<tr>
						<td>Bank Name:</td>
					<td><?=$Bank_Name?></td>
					</tr>
					<tr>
						<td>Tr_mail:</td>
						<td><?=$Tr_mail?></td>
					</tr>
					<tr>
						<td>Account_Number:</td>
							<td><?=$accn?></td>
						
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