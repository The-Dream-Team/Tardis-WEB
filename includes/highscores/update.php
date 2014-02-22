<?php

$username = $_POST['username'];
$distance = $_POST['distance'];
$con = mysqli_connect("localhost","thedreamteam","El3ven","SSA") or die ("Error " . mysqli_error($con));

$query = mysqli_query($con,"UPDATE `Top Player` SET Distance=$distance WHERE PlayerName='$username'");
echo $query;