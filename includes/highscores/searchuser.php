<?php 

$search_username = $_GET['search_username'];

include '../../includes/sqllogin.php';

$result = mysqli_query($con,"SELECT * FROM `Top Player` WHERE `PlayerName` LIKE '%$search_username%'");
		

//Build Result String
$display_string = "<h3>Search Results</h3>"
$display_string .= "<table class='table table-striped'>";
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
	$rank++;
}
// Used for debugging purposes. All fine at the moment!!
// echo "Query: " . $result . "<br />";
$display_string .= "</table>";
$display_string .= "<hr>";
echo $display_string;
?>
