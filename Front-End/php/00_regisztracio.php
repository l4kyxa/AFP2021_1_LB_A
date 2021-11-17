<?php

if (isset($_POST["submit"])) 
{
	$username = $_POST["felhasznaloinev"];
	$email = $_POST["email"];
	$pwd = $_POST["jelszo"];
	$pwdrepeat = $_POST["jelszo_ujra"];

	require_once 'dbhandler.php';
	require_once 'functions.php';

	if (emptyInputSignup($username, $email, $pwd, $pwdrepeat) !== false)
	{
		header ("location: ../regisztracio.php?error=emptyinput");
		exit();
	}
	if (invalidUid($felhasznaloinev) !== false)
	{
		header ("location: ../regisztracio.php?error=invaliduid");
		exit();
	}
	if (invalidEmail($email) !== false)
	{
		header ("location: ../regisztracio.php?error=invalidemail");
		exit();
	}
	if (pwdMatch($pwd, $pwdrepeat) !== false)
	{
		header ("location: ../regisztracio.php?error=passwordsdontmatch");
		exit();
	}
	if (uidExists($conn, $username) !== false)
	{
		header ("location: ../regisztracio.php?error=usernametaken");
		exit();
	}

	createUser($conn, $username, $email, $pwd);

}
else 
{
	header ("location: ../regisztracio.php");
	exit();
}
