<script src="js/ajax.js"></script>
<body onload="ajaxFunction(); top10();">
<input type="hidden" value="10" id="limit"/>

<div class="container">
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