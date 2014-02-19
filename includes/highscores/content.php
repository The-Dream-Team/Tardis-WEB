<script src="ajax.js"></script>
<body onload="ajaxFunction(); top10();">
<input type="hidden" value="10" id="limit"/>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<ul class="nav nav-pills">
  				<li id="top10n"><a href="#" onclick="top10();">Top 10</a></li>
			    <li id="top50n"><a href="#"  onclick="top50();">Top 50</a></li>
 				<li id="top100n"><a href="#" onclick="top100();">Top 100 </a></li>
			</ul>
		</div>
	</div>
	
	
	
	
	<div id="results"></div>
	




    <hr>

</div>
<!-- /.container -->