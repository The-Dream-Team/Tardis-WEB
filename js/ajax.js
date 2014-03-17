function pageLoad(){
	top10();
}

function ajaxFunction(){

    $(document).ready(function() {
        $("#progressbar").css({"width":"100%"});
$("#loading").delay(1500).fadeOut();
	 $("#results").show();
	   });


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

function searchFunction(){

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
    var search_username = document.getElementById('search_username').value;
    var queryString = "?search_username=" + search_username ;
    ajaxRequest.open("GET", "/includes/highscores/searchuser.php" +
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

function submitsearch(){
    searchFunction();
}


//-->
