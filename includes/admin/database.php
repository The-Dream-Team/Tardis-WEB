<link href="http://the-dreamteam.co.uk/css/extras-admin.css" rel="stylesheet">
<div class="container-fluid">
      <div class="row">
       <?php include 'includes/admin/nav.php' ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

<?php
$rank = 1;

include 'includes/sqllogin.php';

$result = mysqli_query($con,"SELECT * FROM `Top Player` ORDER BY Distance DESC");

echo "<div class='container'><table class='table table-striped'>
				<tr>
					<th>ID</th>
					<th>Rank</th>
					<th>Player Name</th>
					<th>Distance</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['PlayerID'] . "</td>";
	echo "<td>" . $rank++ . "</td>";
	echo "<td>" . $row['PlayerName'] . "</td>";
	echo "<td>" . $row['Distance'] . "</td>";
	echo "<td><a href='edituser.php?id=". $row['PlayerID'] . "'>EDIT</a></td>";
	echo "<td><a href='includes/admin/delete.php?id=". $row['PlayerID'] . "'>DELETE</a></td>";
	echo "</tr>";
}
echo "</div></table>";

mysqli_close($con);
?>



        </div>
      </div>
    </div>