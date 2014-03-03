<!-- Carousel
================================================== -->
<div id="Carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#Carousel" data-slide-to="0" class="active"></li>
        <li data-target="#Carousel" data-slide-to="1"></li>
        <li data-target="#Carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/slide1.png" alt="Slide 1">

            <div class="container">
                <div class="carousel-caption">
                    <img class="carousel-imgresponsive" src="img/textlogo.png" alt="textlogo">
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/slide2.png" alt="Slide 2">

            <div class="container">
                <div class="carousel-caption" style="margin-bottom: 50px;">
                    <img class="carousel-imgresponsive" src="img/textdownload.png" alt="Download Game text">
                    <p></p>
                    <p><a class="btn btn-lg btn-success" href="http://37.187.75.63:8080/job/SSA/lastSuccessfulBuild/artifact/target/SSA.jar" role="button"><span
                                class="glyphicon glyphicon-download-alt"></span></a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="img/slide1.png" alt="Slide 3">

            <div class="container">
                <div class="carousel-caption">
                    <img class="carousel-imgresponsive" src="img/top-player.png" alt="Top Player">
                    <p>WoodKatie - 110000 metres  </p>
                    
                    
                 <?php
	

$con = mysqli_connect("localhost","thedreamteam","El3ven","SSA") or die ("Error " . mysqli_error($con));
 
$result = mysqli_query($con,"SELECT * FROM 'Top Player' ORDER BY Distance DESC");

	//Build Result String
$display_string = "<table class='table table-striped'>";
$display_string .= "<tr>";
$display_string .= "<th>Username</th>";
$display_string .= "<th>Distance</th>";
$display_string .= "</tr>";



// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($result))
{
	$display_string .= "<tr>";
	$display_string .= "<td>$row[PlayerName]</td>";
	$display_string .= "<td>$row[Distance]</td>";
	$display_string .= "</tr>";	
	
}
// Used for debugging purposes. All fine at the moment!!
// echo "Query: " . $result . "<br />";
$display_string .= "</table>";
echo $display_string;
?>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#Carousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#Carousel" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>
</div>
<!-- /.carousel -->