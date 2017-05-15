<?php
	function searchclust(){
		$con=mysqli_connect("localhost", "root", "");
		mysqli_select_db($con, "ojt");
		if (isset($_REQUEST['search'])) {
			$nameclust = mysqli_real_escape_string($con, $_REQUEST['nameclust']);     
			$sql = "SELECT * FROM cluster WHERE `Nama Cluster` LIKE '%".$nameclust."%'"; 
			$query = mysqli_query($con, $sql); 

			echo '<div class="scroll-box">';
                echo '<table class="table-cluster">';
					echo '<tbody>';
						while ($row = mysqli_fetch_array($query)){
							echo '<tr>';
								echo '<td><a href="page_view-datacluster.php?segment='.$row['9Cluster'].'&no='.$row['No'].'&search=1">'.$row['Nama Cluster'].'</a></td>';
							echo '</tr>';
						}
					echo '</tbody>';
				echo '</table>';
            echo '</div>'; 
		}
	}
?>