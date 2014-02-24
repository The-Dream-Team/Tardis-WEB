<?php
$pageTitle = "admin";
$page = "admin";
include 'includes/head.php';
?>

<body>

<?php
if(isset($_SESSION["userid"]) && isset($_SESSION["username"]) && isset($_SESSION["password"]) == false ) {
	header("Location: adminlogin.php");
} else {
	exit();
}
    include 'includes/nav.php';
    include 'includes/admin/jumbotron.php';
    include 'includes/admin/database.php';
    include 'includes/footer.php';
    include 'includes/js.php';
?>
</body>
</html>