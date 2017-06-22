<?php
	include('database.php');
	
	$no=$_GET['no'];
	$nquery=mysqli_query($con, "SELECT ODP FROM cluster WHERE No = '".$no."'");
	
	$data=mysqli_fetch_array($nquery);
	$odp=$data['ODP'];
	
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=customer_".$odp.".xls");
	
	$query=mysqli_query($con, "SELECT * FROM customer WHERE RK = '".$odp."'");
	
	echo '<table border="1">';
	echo '<tr>';
	echo '<td>ND</td>'; 
	echo '<td>Nama</td>';  
	echo '</tr>';
	while ($row = mysqli_fetch_array($query)){ 
		echo '<tr>';
		echo '<td>'.$row['ND'].'</td>'; 
		echo '<td>'.$row['NAMA'].'</td>';   
		echo '</tr>';  
	}
	echo '</table>';
?>