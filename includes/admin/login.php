<?php
session_start();
include "includes/sqllogin.php";

$username = $_POST[Username];
$password = $_POST[Password];

$result = mysqli_query($con,"SELECT `ID`, `Username`, `Password` FROM `admins` WHERE Username='$username'");

$row = mysqli_fetch_row($result);
$id = $row[0];
$sqlusername = $row[1];
$sqlpassword = $row[2];
if ($password != $sqlpassword)
{
	echo "Bad Password";
}
else {
	// Create Sessions
	$_SESSION['userid'] = $id;
	$_SESSION['username'] = $sqlusername;
	$_SESSION['password'] = $sqlpassword;
	header("Location: ../../admin.php");
	exit();
}
mysqli_close($con);
?>