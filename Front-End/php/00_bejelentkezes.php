<?php

if (isset($_POST["submit2"]))
{
    $username = $_POST["felhasznaloinev"];
    $pwd = $_POST["jelszo"];

    require_once 'dbhandler.php';
    require_once 'functions.php';

    if (emptyInputLogin($username, $pwd) !== false)
	{
		header ("location: ../regisztracio.php?error=emptyinput");
		exit();
	}

    loginUser($conn, $username, $pwd);
}
else
{
    header("location: ../bejelentkezes.php");
    exit();
}