<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: Emplogin.php');
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

$stmt= $con->prepare('SELECT Employee_Id, First_Name, Last_Name,Street,City,State,Mobile_No,Email,National_ID,Password FROM employee_details WHERE Employee_Id = ?');


$stmt->bind_param('i', $_SESSION['Employee_Id']);
$stmt->execute();
$stmt->bind_result($Employee_Id,$First_Name,$Last_Name,$Street,$City,$State,$Mobile_No,$Email,$National_ID,$Password);
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
			<h2>Profile Page</h2>
			<div>
				<p>Your profile details are below:</p>
				<table>

					<tr>
						<td>Employee_Id:</td>
					<td><?=$Employee_Id?></td>
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
		<?php 
	if (isset($_GET['Update'])) {
		$Customer_Id = $_GET['Update'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM employee_details WHERE Employee_Id=$Employee_Id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$Customer_Id = $n['Employee_Id'];
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
	</body>
</html>