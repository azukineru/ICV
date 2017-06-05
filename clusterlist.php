<?php
	function searchparam($segment,$HS,$SOC){
		echo '<b>';
		echo '&nbsp&nbsp&nbsp&nbsp&nbspArea: '.$HS;
		echo ', ';
		echo 'SOC: '.$SOC;
		echo '</b>';
	}

	function overview($segment,$HS,$SOC,$BF){	
		$con=mysqli_connect("localhost", "root", "");
		mysqli_select_db($con, "ojt");
		
		if($HS=="All"){
			$qHS='';
		}else{
			$qHS=" AND HS = '".$HS."'";
		}
		
		if($SOC=="All"){
			$qSOC='';
		}elseif($SOC=="SMT"){
																										   
			$qSOC=" AND (`DATEL/SOC` = 'BOJ' OR `DATEL/SOC` = 'MKG' OR `DATEL/SOC` = 'SMT' OR `DATEL/SOC` = 'TGU')";
		}elseif($SOC=="JHR"){
																										   
			$qSOC=" AND (`DATEL/SOC` = 'GNK' OR `DATEL/SOC` = 'JHR')";
		}elseif($SOC=="SMC"){
																										   
			$qSOC=" AND (`DATEL/SOC` = 'SMC' OR `DATEL/SOC` = 'CANDI')";
		}else{
			$qSOC=" AND `DATEL/SOC` = '".$SOC."'";
		}
		
		if($BF=="All"){
			$qBF='';
		}else{
			$qBF=" AND Battlefield = '".$BF."'";
		}
		
		$query=mysqli_query($con, "SELECT DISTINCT * FROM cluster WHERE 9Cluster = '".$segment."'".$qHS.$qSOC.$qBF);
					
		$jmlcluster=mysqli_num_rows($query);
		
		$query2=mysqli_query($con, "SELECT * FROM cluster WHERE 9Cluster = '".$segment."'".$qHS.$qSOC.$qBF);
		
		$jmlhh=0;
		
		while ($row = mysqli_fetch_array($query2)){
			$jmlhh=$jmlhh+$row['Jumlah House Hold (Tenant)'];
		}
		
		echo
		'<p>Jumlah Cluster : '.$jmlcluster.'</p>
        <p>Jumlah Household : '.$jmlhh.'</p>';
	}
	
	function clusterlist($segment,$HS,$SOC,$BF){	
		$con=mysqli_connect("localhost", "root", "");
		mysqli_select_db($con, "ojt");
		
		if($HS=="All"){
			$qHS='';
		}else{
			$qHS=" AND HS = '".$HS."'";
		}
		
		if($SOC=="All"){
			$qSOC='';
		}elseif($SOC=="SMT"){
			$qSOC=" AND (`DATEL/SOC` = 'BOJ' OR `DATEL/SOC` = 'MKG' OR `DATEL/SOC` = 'SMT' OR `DATEL/SOC` = 'TGU')";
		}elseif($SOC=="JHR"){
			$qSOC=" AND (`DATEL/SOC` = 'GNK' OR `DATEL/SOC` = 'JHR')";
		}elseif($SOC=="SMC"){
			$qSOC=" AND (`DATEL/SOC` = 'SMC' OR `DATEL/SOC` = 'CANDI')";
		}else{
			$qSOC=" AND `DATEL/SOC` = '".$SOC."'";
		}
		
		if($BF=="All"){
			$qBF='';
		}else{
			$qBF=" AND Battlefield = '".$BF."'";
		}
		
		$query=mysqli_query($con, "SELECT DISTINCT `Nama Cluster` FROM cluster WHERE 9Cluster = '".$segment."'".$qHS.$qSOC.$qBF);
					
		if(mysqli_num_rows($query)>0){
			while ($row = mysqli_fetch_array($query)){ 
				echo '<tr>';
				echo '<td><button id="'.$row['Nama Cluster'].'" value="'.$row['Nama Cluster'].'" onclick="showODCList(this.value)">'.$row['Nama Cluster'].'</button></td>';  
				echo '</tr>';  
			}
		}else{
			echo '<br>&nbsp&nbsp&nbsp&nbsp&nbspSearch returned zero result.';
		}
	}
	
	function odclist($segment,$HS,$SOC,$BF){	
		$con=mysqli_connect("localhost", "root", "");
		mysqli_select_db($con, "ojt");
		
		if($HS=="All"){
			$qHS='';
		}else{
			$qHS=" AND HS = '".$HS."'";
		}
		
		if($SOC=="All"){
			$qSOC='';
		}elseif($SOC=="SMT"){
			$qSOC=" AND (`DATEL/SOC` = 'BOJ' OR `DATEL/SOC` = 'MKG' OR `DATEL/SOC` = 'SMT' OR `DATEL/SOC` = 'TGU')";
		}elseif($SOC=="JHR"){
			$qSOC=" AND (`DATEL/SOC` = 'GNK' OR `DATEL/SOC` = 'JHR')";
		}elseif($SOC=="SMC"){
			$qSOC=" AND (`DATEL/SOC` = 'SMC' OR `DATEL/SOC` = 'CANDI')";
		}else{
			$qSOC=" AND `DATEL/SOC` = '".$SOC."'";
		}
		
		if($BF=="All"){
			$qBF='';
		}else{
			$qBF=" AND Battlefield = '".$BF."'";
		}
		
		$query=mysqli_query($con, "SELECT * FROM cluster WHERE 9Cluster = '".$segment."'".$qHS.$qSOC.$qBF);
					
		if(mysqli_num_rows($query)>0){
			while ($row = mysqli_fetch_array($query)){ 
				echo '<a href="page_view-datacluster.php?segment='.$row['9Cluster'].'&no='.$row['No'].'&search=0" class="button extended odc '.$row['Nama Cluster'].'" name="'.$row['Nama Cluster'].'" >'.$row['ODP'].'-'.$row['Nama Cluster'].'</a>';  
																	  
				   
			}
		}else{
			echo '<br>&nbsp&nbsp&nbsp&nbsp&nbspSearch returned zero result.';
		}
	}
	
?>

