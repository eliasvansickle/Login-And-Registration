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
		$errors['first_name'] = "<span class='error'>Please enter your first name</span>";
	}
	if(empty($_POST['last_name'])) 
	{
		$errors['last_name'] = "<span class='error'>Please enter your last name</span>";
	}
	if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$errors['email'] = "<span class='error'>Please submit a valid email</span>";
		}
	if($_POST['password'] != $_POST['passconf']) 
	{
		$errors['password'] = "<span class='error'>Passwords must match</span>";
	}

	$_SESSION['errors'] = $errors;
	header('location: index.php');
	die();

}

function login_user($post) // just a parameter called post 
{

}




 ?>