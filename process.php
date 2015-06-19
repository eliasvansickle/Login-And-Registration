<?php
session_start();
require('connection.php');


if(isset($_POST['action']) && $_POST['action'] == 'register') 
{
	//call to function
	register_user($_POST); //uses actual $_POST
}

if(isset($_POST['action']) && $_POST['action'] == 'login') 
{
	//call to function
	login_user($_POST);
}

function register_user($post) // just a parameter called post 
{
	////////START OF VALIDATION CHECKS////////
	$errors = array();
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
	// header('location: index.php');
	// die();
	////////END OF VALIDATION CHECKS////////

	if(!empty($_SESSION['errors']))
	{
		// Errors Still exist
	}
	else // Insert validated user registration information into the database
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at)
				  VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['email']}', '{$post['password']}', NOW(), NOW())";
		echo $query;
		die();
	}


}

function login_user($post) // just a parameter called post 
{

}




 ?>