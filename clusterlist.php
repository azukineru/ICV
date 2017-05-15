<?php
	function clusterlist($segment){
		$con=mysqli_connect("localhost", "root", "");
		mysqli_select_db($con, "ojt");
			
		$query=mysqli_query($con, "SELECT * FROM cluster WHERE 9Cluster = '".$segment."'");
					
		while ($row = mysqli_fetch_array($query)){ 
			echo '<tr>';
			echo '<td><a href="page_view-datacluster.php?segment='.$segment.'&no='.$row['No'].'&search=0">'.$row['Nama Cluster'].'</a></td>';  
			echo '</tr>';  
		}
	}	
?>