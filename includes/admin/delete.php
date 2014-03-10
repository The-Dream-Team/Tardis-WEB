<?php

include 'includes/sqllogin.php';

$ID = $_GET['id'];
$query = mysqli_query($con,"DELETE FROM `Top Player` WHERE `PlayerID` = $ID");


mysqli_close($con);

header("Location: ../../admin.php");
exit;

