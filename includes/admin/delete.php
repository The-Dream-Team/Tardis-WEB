<?php

include '../sqllogin.php';

$playerid = $_GET['id'];
$query = mysqli_query($con,"DELETE FROM `Top Player` WHERE `PlayerID` = $playerid");

mysqli_close($con);

header("Location: ../../admin.php");
exit;

