<?php

include 'includes/sqllogin.php';

$ID = $_GET['id'];

$query = mysqli_query($con,"DELETE FROM `Top Player` WHERE PlayerID='$ID' LIMIT 1");


mysqli_close($con);

header("Location: ../../admin.php");
exit;
?>

<script>
    alert("<?php echo $query?>");
</script>
