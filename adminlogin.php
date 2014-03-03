<?php
$pageTitle = "adminlogin";
$page = "adminlogin";
include 'includes/head.php';
?>
  <body>
    <div class="container">
      <form class="form-signin" method="post" action="includes/admin/login.php">
        <h2 class="form-signin-heading">Admin Panel</h2>
        <input type="text" name="Username" class="form-control" placeholder="Username" required autofocus>
        <input type="text" name="Password" class="form-control" placeholder="Password" required> 
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
  </body>
</html>
<?php 
include 'includes/js.php';
?>
