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

if ( !isset($_POST['Email'], $_POST['Password']) ) {
	
	exit('Please fill both the Email and password fields!');
}


if ($stmt = $con->prepare('SELECT Employee_Id, Password FROM employee_details WHERE Email = ?')) {
	
	$stmt->bind_param('s', $_POST['Email']);
	$stmt->execute();
	
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($Employee_Id, $Password);
	$stmt->fetch();
	
	if (password_verify($_POST['Password'], $Password)) {
		
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['Email'] = $_POST['Email'];
		$_SESSION['Employee_Id'] = $Employee_Id;
		header('Location: emphome.php');
	} else {
		
		echo 'Incorrect Email and/or password!';
	}
} else {

	echo 'Incorrect Email and/or password!';
}


	$stmt->close();
}
?>
