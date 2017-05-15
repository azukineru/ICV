<?php	
function clustername($no){
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM cluster WHERE No = ".$no);
	$row=mysqli_fetch_array($query);
	
	echo $row['Nama Cluster'];
}

function datalist($no){				
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM cluster WHERE No = ".$no);
	$row=mysqli_fetch_array($query);
	
	echo '<li>HS: '.$row['HS'].'</li>';
	echo '<li>Tipe Cluster : '.$row['Tipe Cluster'].'</li>';
	echo '<li>Jenis Cluster : '.$row['Jenis Cluster'].'</li>';
	echo '<li>'.$row['Jumlah House Hold (Tenant)'].'Household</li>';
	echo '<li>Harga Rumah : '.$row['Harga Rumah'].'</li>';
	
	$komp=$row['Kompetitor'];
	if($komp='Tidak'){
		$komp='Tidak Ada';
	}
	
	echo '<li>'.$komp.' Kompetitor</li>';
	echo '<li>'.$row['Infrastruktur Perumahan'].'</li>';
	echo '<li>'.$row['Jumlah Rumah yg Sdh LIS Telkom'].' rumah sudah LIS Telkom</li>';
	echo '<li>Kapasitas Jaringan : '.$row['Kapasitas Jaringan'].'</li>';
	echo '<li>Readiness : '.$row['Readines'].'</li>';
	echo '<li>ODP : '.$row['ODP'].'</li>';
	echo '<li>Priority : '.$row['Priority'].'</li>';
	echo '<li>PIC : '.$row['PIC'].'</li>';
	echo '<li>Kode Action : '.$row['Kode Action'].'</li>';
	echo '<li>Action : '.$row['Action'].'</li>';
	echo '<li>Product/Partnership yg Ditawarkan : '.$row['Product/partnership yg ditawarkan'].'</li>';
	echo '<li>Jumlah ODP : '.$row['JML ODP'].'</li>';
	echo '<li>ISI : '.$row['ISI'].'</li>';
	echo '<li>AVAI : '.$row['AVAI'].'</li>';
	echo '<li>KAP : '.$row['KAP'].'</li>';
}
?>