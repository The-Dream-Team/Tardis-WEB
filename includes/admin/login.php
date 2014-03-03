<?php session_start();

include "includes/sqllogin.php";
	
		
	$result = mysqli_query($con,"SELECT * FROM admin WHERE Username='$_POST[Username]'");

	$row = mysqli_fetch_row($result);
	$id = $row[0];
	$username = $row[1];
	$password = $row[2];
	if ($_POST['Password'] != $password)
	{
		echo "Bad Username or Password";	
		exit;
	} 
		else {
			// Create Sessions
			$_SESSION['username'] = $username;
			header("Location: ../../admin.php");
			}

?>