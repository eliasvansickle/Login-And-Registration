<?php 
	session_start();
	echo "Hi, {$_SESSION['first_name']}!";
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="style2.css">
 	<title>Successful Login</title>
 </head>
 <body>
 	<form action="process.php" method="post">
 		<input type="submit" value="Log Off">
 		<input type="hidden" name="action" value="log_off">
 	</form>
 </body>
 </html>