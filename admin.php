<?php session_start();
$pageTitle = "admin";
$page = "admin";
include 'includes/head.php';
?>

<body>

<?php
if (!isset($_SESSION['username'])) {
header ("Location: adminlogin.php");
exit();
}
else {
    include 'includes/nav.php';
    include 'includes/admin/jumbotron.php';
    include 'includes/admin/database.php';
    include 'includes/admin/adminfooter.php';
    include 'includes/js.php';
}
?>
</body>
</html>