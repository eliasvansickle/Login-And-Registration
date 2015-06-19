<?php
session_start();
require('connection.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Login and Registration</title>
</head>
<body>
	<div id="register">
		<h1>Register Here!</h1>
		<form action="process.php" method="post">
			<label for="first_name"></label>
			<input type="text" name="first_name" placeholder="First Name">
			<?php 
				if(isset($_SESSION['errors']['first_name'])) 
				{
					echo $_SESSION['errors']['first_name'];
					unset($_SESSION['errors']['first_name']);
				}
			 ?>

			<label for="last_name"></label>
			<input type="text" name="last_name" placeholder="Last Name">
			<?php 
				if(isset($_SESSION['errors']['last_name'])) 
				{
					echo $_SESSION['errors']['last_name'];
					unset($_SESSION['errors']['last_name']);
				}
			 ?>

			<label for="email"></label>
			<input type="text" name="email" placeholder="Email Address">
			<?php 
				if(isset($_SESSION['errors']['email'])) 
				{
					echo $_SESSION['errors']['email'];
					unset($_SESSION['errors']['email']);
				}
			 ?>

			<label for="password"></label>
			<input type="password" name="password" placeholder="Password">
			<?php 
				if(isset($_SESSION['errors']['password'])) 
				{
					echo $_SESSION['errors']['password'];
					unset($_SESSION['errors']['password']);
				}
			 ?>

			<label for="passconf"></label>
			<input type="password" name="passconf" placeholder="Password Confirmation">

			<label for="register"></label>
			<input type="submit" value="Register">

			<input type="hidden" name="action" value="register">
		</form>
	</div>
	<div id="login">
		<h1>Login Here!</h1>
		<form action="process.php" method="post">
			<label for="email"></label>
			<input type="text" name="email" placeholder="Email Address">

			<label for="password"></label>
			<input type="password" name="password" placeholder="Password">

			<input type="submit" value="Login">
			<input type="hidden" name="action" value="login">
		</form>
	</div>
</body>
</html>