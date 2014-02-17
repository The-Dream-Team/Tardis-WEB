<body onload="ajaxFunction();">
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
 var limit = document.getElementById('limit').value;
 var queryString = "?limit=" + limit ;
 ajaxRequest.open("GET", "includes/highscores/results-ajax.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}

function top10(){
	document.getElementById('limit').value="10";
	document.getElementById('top10n').className="active";
	document.getElementById('top50n').className="";
    document.getElementById('top100n').className="";
	ajaxFunction();
}

function top50(){
		document.getElementById('limit').value="50";
        document.getElementById('top50n').className="active";
        document.getElementById('top10n').className="";
        document.getElementById('top100n').className="";
	ajaxFunction();
}

function top100(){
	document.getElementById('limit').value="100";
    document.getElementById('top100n').className="active";
    document.getElementById('top10n').className="";
    document.getElementById('top50n').className="";
	ajaxFunction();
}


//-->
</script>
	
	
	<div id="results"></div>
	




    <hr>

</div>
<!-- /.container -->