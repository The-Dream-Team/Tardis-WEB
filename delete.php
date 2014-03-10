<?php

include '../sqllogin.php';

mysqli_query($con,"DELETE FROM Top Player WHERE PlayerID='$_GET[id]' LIMIT 1");

mysqli_close($con);

//header("Location: admin.php");
exit;

