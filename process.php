<?php
session_start();
require('connection.php');

$errors = array();

if(isset($_POST['action']) && $_POST['action'] == 'register') 
{
	// var_dump($_POST);
	//call to function
	register_user($_POST); //uses actual $_POST
}

if(isset($_POST['action']) && $_POST['action'] == 'login') 
{
	// var_dump($_POST);
	//call to function
	login_user($_POST);
}

function register_user($post) // just a parameter called post 
{
	if(empty($_POST['first_name'])) 
	{
		$errors['first_name'] = "Please enter your first name";
	}
	if(empty($_POST['last_name'])) 
	{
		$errors['last_name'] = "Please enter your last name";
	}
	if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$errors['email'] = "Please submit a valid email";
		}
	if(empty($_POST['password']))
	{
		$errors['password'] = "Please enter a password";
	}
	if($_POST['passconf'] != $_POST['password']) 
	{
		$errors['passconf'] = "Passwords must match";
	}

	$_SESSION['errors'] = $errors;
	header('location: index.php');
	die();

}

function login_user($post) // just a parameter called post 
{

}




 ?>