<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/
		all.css">
		<link rel="stylesheet" type="text/css" href="loginstyle.css">
		
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="au.php" method="post">
				<label for="Email">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="Email" placeholder="Email" id="Email" required>
				<label for="Password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="Password" name="Password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
				 <a href="forget_password.php" class="btn btn-full">Forget_Password?</a>
				 
				 <a href="index.php" class="btn btn-full"><br>Not a member Join us</a></br>


				
			</form>
		</div>


	


	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	</body>
</html>