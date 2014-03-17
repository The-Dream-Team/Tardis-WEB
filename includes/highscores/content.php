<script src="js/ajax.js"></script>
<body onload="pageLoad();">
<input type="hidden" value="10" id="limit"/>

<?php 
 if(isset($_COOKIE['search_username'])){
   $keywords = $_COOKIE['search_username'];
  }
else{
  $keywords = "";
  }
 ?>


<div class="container">
<div class="row">
<div class="col-sm-8"></div>
 
<div class="col-sm-4">
<form class="form-inline" role="form">
 <div class="form-group">
 <label class="sr-only" for="search_username_label">Search query</label>
 <input type="text" class="form-control" id="search_username" value="<?=$keywords?>" placeholder="Enter Username.">
 </div>
 <button class="btn btn-default btn-sm" onclick="searchFunction()"><span class="glyphicon glyphicon-search"></span></button>
</form>
  	
 </div>


<div class="row">
	<div class="col-lg-12">
		<div id="search_results"></div>
	</div>
</div>


	<div class="row">
		<div class="col-lg-12">
			<ul class="nav nav-tabs">
  				<li id="top10n"><a href="#" onclick="top10();">Top 10</a></li>
			    <li id="top50n"><a href="#"  onclick="top50();">Top 50</a></li>
 				<li id="top100n"><a href="#" onclick="top100();">Top 100 </a></li>
			</ul>
		</div>
	</div>
	

	
	<br>
	
	<div class="panel panel-default hs-pull-up">
		<div class="panel-body">
    <div id="loading">
	
	<div class="progress progress-striped active">
  <div class="progress-bar" id="progressbar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
    <span class="sr-only">Loading results</span>
  </div>
</div>
	
	</div>
	<div id="results"></div>
  </div>
</div>

	
    <hr>

</div>
<!-- /.container -->
