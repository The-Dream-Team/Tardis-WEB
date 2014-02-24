<?php
$pageTitle = "admin";
$page = "admin";
include 'includes/head.php';
?>

<body>

<?php
session_start();

if (isset($_SESSION['userid']) && $_SESSION['username'] && $_SESSION['password'] != '') {
header ("Location: adminlogin.php");
}
    include 'includes/nav.php';
    include 'includes/admin/jumbotron.php';
    include 'includes/admin/database.php';
    include 'includes/footer.php';
    include 'includes/js.php';
?>
</body>
</html>