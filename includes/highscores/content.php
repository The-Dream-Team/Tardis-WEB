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
 ajaxRequest.open("GET", "includes/highscores/results-ajax.php" + 
                              queryString, true);
 ajaxRequest.send(null); 
}
//-->
</script>
	
	
	<div id="results"></div>
	




    <hr>

</div>
<!-- /.container -->