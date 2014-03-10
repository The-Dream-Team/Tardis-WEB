<?php

include "../sqllogin.php";

mysqli_query($con,"DELETE FROM Top Players WHERE ID='$_GET[PlayerID]'");

mysqli_close($con);

header("Location: admin.php");
exit;

?>