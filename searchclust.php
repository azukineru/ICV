<?php
	function searchclust(){
		$con=mysqli_connect("localhost", "root", "");
		mysqli_select_db($con, "ojt");
		if (isset($_REQUEST['search'])) {
			$nameclust = mysqli_real_escape_string($con, $_REQUEST['nameclust']);

			$search_exploded=explode(" ",$nameclust);
			$count=0; 
			$construct=" ";
			
			foreach($search_exploded as $search_each){
				$count++;
				if($count==1){
					$construct.="`Nama Cluster` LIKE '%".$search_each."%'";
				}else{
					$construct.=" AND `Nama Cluster` LIKE '%".$search_each."%'";
				}
			}
			
			$sql = "SELECT * FROM cluster WHERE".$construct; 
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