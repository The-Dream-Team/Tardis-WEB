<?php

include "../sqllogin.php";

$result = mysqli_query($con,"SELECT * FROM `Top Player` WHERE ID='$_GET[id]' LIMIT 1");

while	($row = mysqli_fetch_array($result)) {
echo	"<form class='form-signin' action='edit.php' method='post'>";
    echo		"<input type='text' class='form-database' placeholder='PlayerID' name='PlayerID' value='". $row['PlayerID'] ."' required=''>";
    echo		"<input type='password' class='form-database' placeholder='PlayerName' name='PlayerName' value='". $row['PlayerName'] ."' required=''>";
    echo		"<input type='text' class='form-database' placeholder='Distance' name='Distance' value='". $row['Distance'] ."' required=''>";
    echo		"<input type='submit' class='btn btn-lg btn-primary btn-submit' value='Submit' required=''>";
    echo	"</form>";
}
mysqli_close($con);
