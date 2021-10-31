<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = '';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if ( mysqli_connect_errno() ) {

	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ( !isset($_POST['Customer_Id'], $_POST['Password']) ) {
	
	exit('Please fill both the Email and password fields!');
}


if ($stmt = $con->prepare('SELECT Customer_Id, Password FROM customer_detalis WHERE Customer_Id = ?')) {
	
	$stmt->bind_param('s', $_POST['Customer_Id']);
	$stmt->execute();
	
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($Customer_Id, $Password);
	$stmt->fetch();
	
	if (password_verify($_POST['Password'], $Password)) {
		
		session_regenerate_id();
	
		$_SESSION['Password'] = $_POST['Password'];
		$_SESSION['Customer_Id'] = $Customer_Id;
		header('Location: new.php');
	} else {
		
		echo 'Incorrect Email and/or password!';
	}
} else {

	echo 'Incorrect Email and/or password!';
}


	$stmt->close();
}
?>
