<?php

include "../sqllogin.php";

$result= mysqli_query($con," UPDATE  `SSA`.`Top Player` SET  `PlayerID` =  '$_POST[PlayerID]',
`PlayerName` =  '$_POST[PlayerName]',
`Distance` =  '$_POST[Distance]' WHERE  ID='$_POST[PlayerID]'");

header("Location: ../../admin.php");
exit();
mysqli_close($con);