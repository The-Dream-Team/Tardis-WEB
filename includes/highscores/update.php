<?php

$username = $_GET['username'];
$distance = $_GET['distance'];
$con = mysqli_connect("localhost","thedreamteam","El3ven","SSA") or die ("Error " . mysqli_error($con));

mysqli_query($con,"UPDATE `Top Player` SET Distance=$distance WHERE PlayerName=$username");