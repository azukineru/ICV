<?php
	function searchparam($segment,$HS,$SOC){
		echo '<b>';
		echo '&nbsp&nbsp&nbsp&nbsp&nbspArea: '.$HS;
		echo ', ';
		echo 'SOC: '.$SOC;
		echo '</b>';
	}

	function clusterlist($segment,$HS,$SOC){	
		$con=mysqli_connect("localhost", "root", "");
		mysqli_select_db($con, "ojt");
			
		if($SOC=="All"){
			$query=mysqli_query($con, "SELECT * FROM cluster WHERE 9Cluster = '".$segment."' AND HS = '".$HS."'");
		}elseif($SOC=="SMT"){
			$query=mysqli_query($con, "SELECT * FROM cluster WHERE 9Cluster = '".$segment."' AND HS = '".$HS."' AND 
			(`DATEL/SOC` = 'BOJ' OR `DATEL/SOC` = 'MKG' OR `DATEL/SOC` = 'SMT' OR `DATEL/SOC` = 'TGU')");
		}elseif($SOC=="JHR"){
			$query=mysqli_query($con, "SELECT * FROM cluster WHERE 9Cluster = '".$segment."' AND HS = '".$HS."' AND 
			(`DATEL/SOC` = 'GNK' OR `DATEL/SOC` = 'JHR')");
		}elseif($SOC=="SMC"){
			$query=mysqli_query($con, "SELECT * FROM cluster WHERE 9Cluster = '".$segment."' AND HS = '".$HS."' AND 
			(`DATEL/SOC` = 'SMC' OR `DATEL/SOC` = 'CANDI')");	
		}else{
			$query=mysqli_query($con, "SELECT * FROM cluster WHERE 9Cluster = '".$segment."' AND HS = '".$HS."' AND `DATEL/SOC` = '".$SOC."'");
		}
					
		if(mysqli_num_rows($query)>0){
			while ($row = mysqli_fetch_array($query)){ 
				echo '<tr>';
				echo '<td><a class="ListCluster" href="#">'.$row['Nama Cluster'].'</a></td>';  
				echo '</tr>';  
			}
		}else{
			echo '<br>&nbsp&nbsp&nbsp&nbsp&nbspSearch returned zero result.';
		}
	}		
?>
