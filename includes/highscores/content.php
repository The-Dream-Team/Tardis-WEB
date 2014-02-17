<body onload="ajaxFunction();">
<input type="hidden" value="10" id="ilimit"/>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<ul class="nav nav-pills">
  				<li class="active"><a href="#">Top 10</a></li>
			    <li><a href="#">Top 50</a></li>
 				<li><a href="#">Top 100 </a></li>
			</ul>
		</div>
	</div>
	 <?php /*
	$rank = 1;
			include 'includes/sqllogin.php';

			$result = mysqli_query($con,"SELECT * FROM  `Top Player` ORDER BY Distance DESC LIMIT 10");

			echo "<table class='table table-striped'>
				<tr>
					<th>Rank</th>
					<th>Username</th>
					<th>Distance</th>

				</tr>";

				while($row = mysqli_fetch_array($result))
				{
					
					echo "<tr>";
					echo "<td>" . $rank++ . "</td>";
					echo "<td>" . $row['PlayerName'] . "</td>";
					echo "<td>" . $row['Distance'] . "</td>";
					echo "</tr>";
				}
			echo "</table>";

			mysqli_close($con);
	*/?> 
	
	<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code
function ajaxFunction(){
 var ajaxRequest;  // The variable that makes Ajax possible!
 
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('results');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
 var tlimit = document.getElementById('ilimit').value;
 var queryString = "?limit=" + tlimit ;
 ajaxRequest.open("GET", "includes/highscore/results-ajax.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}
//-->
</script>
	
	
	<div id="results"></div>
	




    <hr>

</div>
<!-- /.container -->