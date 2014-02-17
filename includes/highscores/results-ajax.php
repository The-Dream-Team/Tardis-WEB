<?php
	$rank = 1;
	$limit = $_GET['limit'];
	include 'includes/sqllogin.php';
 
$result = mysqli_query($con,"SELECT * FROM  `Top Player` ORDER BY Distance DESC LIMIT $limit");
 
	//Build Result String
$display_string = "<table class='table table-striped'>";
$display_string .= "<tr>";
$display_string .= "<th>Rank</th>";
$display_string .= "<th>Username</th>";
$display_string .= "<th>Distance</th>";
$display_string .= "</tr>";
 
// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($result))
{
	$display_string .= "<tr>";
	$display_string .= "<td>$row . $rank++ .</td>";
	$display_string .= "<td>$row[PlayerName]</td>";
	$display_string .= "<td>$row[Distance]</td>";
	$display_string .= "</tr>";	
}
// Used for debugging purposes. All fine at the moment!!
// echo "Query: " . $sql . "<br />";
$display_string .= "</table>";
echo $display_string;
?>