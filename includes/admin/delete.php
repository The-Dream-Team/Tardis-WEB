<?php

include '/includes/sqllogin.php';

$playerid = $_GET['id'];
$query = mysqli_query($con,"DELETE FROM `Top Player` WHERE `PlayerID` = $playerid");

echo $playerid;
echo $query;

mysqli_close($con);

//header("Location: ../../admin.php");
exit;

