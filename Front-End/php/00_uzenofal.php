<?php
session_start();
if (isset($_POST["submit3"]))
{
    $neve = $_SESSION["useruid"];
    $email = $_SESSION["useremail"];
    $uzenet = $_POST["uzenet"];
    $datum = $_POST["datum"];

    require_once 'dbhandler.php';
	require_once 'functions.php';

    if (uidWrongUser($conn, $neve) !== true)
	{
		header ("location: ../uzenofal.php?error=wrongusername");
		exit();
	}

    if (uidWrongEmail($conn, $email) !== true)
	{
		header ("location: ../uzenofal.php?error=wrongemail");
		exit();
	}

    setComment($conn, $neve, $email, $uzenet, $datum);
}
else
{
    header ("location: ../uzenofal.php");
	exit();
}