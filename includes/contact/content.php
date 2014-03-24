<div class="container">

<div class="row">   
	<div class="col-sm-8 contact-form">
		<form id="contact" method="post" action="includes/contact/submit.php" class="form" role="form">
			<div class="row">
				<div class="col-xs-6 col-md-6 form-group">
					<input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
				</div>
	<div class="col-xs-6 col-md-6 form-group">
		<input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
	</div>
			</div>
<textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
<br />
<div class="row">
<div class="col-xs-12 col-md-12 form-group">
<button class="btn btn-primary pull-right" type="submit">Submit</button>
</div>
</div>
</form>
</div>

<div class="col-sm-1">    </div>

<div class="col-sm-3">

<a href="https://www.facebook.com/superspaceshipadventure" target="_blank"><img  src="img/fblogo.png" alt="Facebook"></a>
<br>
<br>
<a href="https://twitter.com/ThedreamTeamUni" target="_blank"><img  src="img/twitterlogo.png" alt="Twitter"></a>
</div>

</div>

</div>

<?php 
if (isset($_GET['success'])) {
echo "<div class='alert alert-success'>Your message has been recieved.</div>";
}
?>

    <hr>

</div>
<!-- /.container -->