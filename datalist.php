<?php	
function clustername($no){
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM cluster WHERE No = ".$no);
	$row=mysqli_fetch_array($query);
	
	echo $row['ODP'].'-'.$row['Nama Cluster'];
}

function map_url($no){
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM map_data WHERE id_cluster = ".$no);
	$row=mysqli_fetch_array($query);
	
	echo $row['map_url'];
}

function satellite_url($no){
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM map_data WHERE id_cluster = ".$no);
	$row=mysqli_fetch_array($query);
	
	echo $row['satellite_url'];
}

function datalist($no){				
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM cluster WHERE No = ".$no);
	$row=mysqli_fetch_array($query);

	echo '
	<tr>
		<th colspan="4">Info ODP :</th>
	</tr>
	<tr>
		<th colspan="4"><form target="_blank" action="https://dashboard.telkom.co.id/fulfillment"><button class="button expanded">Detail ODP on Dashboard Fulfillment</button></form></th>
	</tr>
	<tr>
		<th>Jumlah ODP</th>
		<th>Kapasitas</th>
		<th>Isi</th>
		<th>Available</th>
	</tr>
	<tr>
		<td>'.$row['JML ODP'].'</td>
		<td>'.$row['KAP'].'</td>
		<td>'.$row['ISI'].'</td>
		<td>'.$row['AVAI'].'</td>
	</tr>
	';
	/*
	echo '<li><a class="no-list" href="#">Kapasitas Jaringan : '.$row['Kapasitas Jaringan'].'</a><ul class="no-data menu vertical sublevel-1"></ul></li>';
	echo '<li><a class="no-list" href="#">Readiness : '.$row['Readines'].'</a><ul class="no-data menu vertical sublevel-1"></ul></li>';
	echo '<li><a class="no-list" href="#">Priority : '.$row['Priority'].'</a><ul class="no-data menu vertical sublevel-1"></ul></li>';
	echo '<li><a class="no-list" href="#">PIC : '.$row['PIC'].'</a><ul class="no-data menu vertical sublevel-1"></ul></li>';
	echo '<li><a class="no-list" href="#">Kode Action : '.$row['Kode Action'].'</a><ul class="no-data menu vertical sublevel-1"></ul></li>';
	echo '<li><a class="no-list" href="#">Action : '.$row['Action'].'</a><ul class="no-data menu vertical sublevel-1"></ul></li>';
	echo '<li><a class="no-list" href="#">Product/Partnership yg Ditawarkan : '.$row['Product/partnership yg ditawarkan'].'</a><ul class="no-data menu vertical sublevel-1"></ul></li>';
	echo '<li><a class="no-list" href="#">ODP : '.$row['ODP'].'</a><ul class="no-data menu vertical sublevel-1"></ul></li>';
	*/
}

function clusterInfo($no){
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM cluster WHERE No = ".$no);
	$row=mysqli_fetch_array($query);

	echo '<li><a href="#"><b>Info Cluster :</b></a>
	<ul class="no-data menu vertical sublevel-1">
		<li><a class="subitem">Tipe Cluster : '.$row['Tipe Cluster'].'</a></li>
		<li><a class="subitem">Jenis Cluster : '.$row['Jenis Cluster'].'</a></li>
		<li><a class="subitem">Jumlah House Hold (Tenant) : '.$row['Jumlah House Hold (Tenant)'].'</a></li>
		<li><a class="subitem">Harga Rumah : '.$row['Harga Rumah'].'</a></li>
		<li><a class="subitem">'.$row['Jumlah Rumah yg Sdh LIS Telkom'].' rumah sudah LIS Telkom</a></li>
		<form target="_blank" action="custdata.php?no='.$no.'" method="POST"><button class="button expanded">Download Customer Data</button></form>
	</ul></li>';

	$kquery=mysqli_query($con, "SELECT * FROM kompetitor WHERE No = ".$no);
	$krow=mysqli_fetch_array($kquery);																
	echo '<li><a href="#"><b>Info Kompetitor :</b></a>
	<ul class="no-data menu vertical sublevel-1">
		<li><a class="subitem">Kompetitor : '.$krow['NAMA KOMPETITOR'].'</a></li>
		<li><a class="subitem">Harga Kompetitor : ~ Rp '.$krow['HARGA KOMPETITOR'].'</a></li>
	</ul></li>';
	
	$pquery=mysqli_query($con, "SELECT * FROM pricing WHERE No = ".$no);
	$prow=mysqli_fetch_array($pquery);	
	
	echo '<li><a href="#"><b>Info Package Offering :</b></a>
	<ul class="no-data menu vertical sublevel-1">
		<li><a class="subitem">Paket : '.$prow['PPMB_paket'].'</a></li>
		<li><a class="subitem">Harga : '.$prow['PPMB_tarif'].'</a></li>
	</ul></li>';
}

?>
