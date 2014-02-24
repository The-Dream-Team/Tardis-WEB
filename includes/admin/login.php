<?php session_start();
include "includes/sqllogin.php";

$result = mysqli_query($con,"SELECT ID, Username, Password FROM admins WHERE Username='$_POST[Username]'");

$row = mysqli_fetch_row($result);
$id = $row[0];
$username = $row[1];
$password = $row[2];
if ($_POST['Password'] != $password)
{
	echo "Bad Username or Password";
}
else {
	// Create Sessions and cookies
	$_SESSION['userid'] = $id;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	setcookie("id", $id, strtotime( '+30 days' ), "/", "", "", TRUE);
	setcookie("user", $username, strtotime( '+30 days' ), "/", "", "", TRUE);
	setcookie("pass", $password, strtotime( '+30 days' ), "/", "", "", TRUE);
	header("Location: ../../admin.php");
	exit;
}
?>