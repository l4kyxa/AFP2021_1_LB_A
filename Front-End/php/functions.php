<?php

function emptyInputSignup($username, $email, $pwd, $pwdrepeat)
{
	$result;
	if (empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat))
	{
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}
function invalidUid($username)
{
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
	{
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}
	function invalidEmail($email)
{
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}
function pwdMatch($pwd, $pwdrepeat)
{
	$result;
	if ($pwd !== $pwdrepeat)
	{
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}
function uidExistss($conn, $username, $email)
{
	$sql = "SELECT * FROM felhasznalok WHERE Felhasznalonev = ? OR Email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		header ("location: ../regisztracio.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData))
	{
		return $row;
	}
	else
	{
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}
function createUser($conn, $email, $username, $pwd)
{
	$sql = "INSERT INTO felhasznalok (Email, Felhasznalonev, Jelszo, Aszf, Bejelentkezve, Statusz) VALUES (?, ?, ?, '1', '0', '0') ;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		header ("location: ../regisztracio.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header ("location: ../regisztracio.php?error=none");
	exit();
}

function emptyInputLogin($username, $pwd)
{
	$result;
	if (empty($username) || empty($pwd))
	{
		$result = true;
	}
	else
	{
		$result = false;
	}
	return $result;
}

function loginUser($conn, $username, $pwd)
{
	$uidExists = uidExistss($conn, $username, $username);

	if ($uidExists === false)
	{
		header ("location: ../login.php;error=wrongloginusername");
		exit();
	}

	$pwdHashed = $uidExists["Jelszo"];
	$checkPwd = password_verify($pwd, $pwdHashed);

	if ($checkPwd === false)
	{
		header("location: ../login.php?error=wrongloginpwd");
		exit();
	}
	else if ($checkPwd === true)
	{
		session_start();
		$_SESSION["userid"] = $uidExists["Felhasznalo_ID"];
		$_SESSION["useruid"] = $uidExists["Felhasznalonev"];
		$_SESSION["useremail"] = $uidExists["Email"];
		header("location: ../index.php");
		exit();
	}
}

function setComment($conn, $neve, $email, $uzenet, $datum)
{
	$sql = "INSERT INTO bejegyzes (Neve, Emailcim, Uzenet, Datum) VALUES (?, ?, ?, ?) ;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		header ("location: ../uzenofal.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "ssss", $neve, $email, $uzenet, $datum);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header ("location: ../uzenofal.php?error=none");
	exit();
}

function uidWrongUser($conn, $neve)
{
	$sql = "SELECT * FROM felhasznalok WHERE Felhasznalonev = ? ;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		header ("location: ../regisztracio.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $neve);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData))
	{
		$result = true;
		return $result;
	}
	else
	{
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}

function uidWrongEmail($conn, $email)
{
	$sql = "SELECT * FROM felhasznalok WHERE Email = ?;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql))
	{
		header ("location: ../regisztracio.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if ($row = mysqli_fetch_assoc($resultData))
	{
		$result = true;
		return $result;
	}
	else
	{
		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}