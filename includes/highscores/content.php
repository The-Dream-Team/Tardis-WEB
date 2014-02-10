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
	<?php
			$con=mysqli_connect("localhost","thedreamteam","El3ven","SSA") or die ("Error " . mysqli_error($con));

			$result = mysqli_query($con,"SELECT * FROM  `Top Player` ORDER BY Distance DESC LIMIT 10");

			echo "<table class='table table-striped'>
				<tr>
					<th>Rank</th>
					<th>Name</th>
					<th>Distance</th>

				</tr>";

				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
					echo "<td>" . $row['PlayerID'] . "</td>";
					echo "<td>" . $row['PlayerName'] . "</td>";
					echo "<td>" . $row['Distance'] . "</td>";
					echo "</tr>";
				}
			echo "</table>";

			mysqli_close($con);
	?>
	
	




    <hr>

</div>
<!-- /.container -->