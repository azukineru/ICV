<?php	
function clustername($no){
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM cluster WHERE No = ".$no);
	$row=mysqli_fetch_array($query);
	
	echo $row['Nama Cluster'];
}

function map_url($no){
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM cluster WHERE No = ".$no);
	$row=mysqli_fetch_array($query);
	
	echo $row['map_url'];
}

function satellite_url($no){
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM cluster WHERE No = ".$no);
	$row=mysqli_fetch_array($query);
	
	echo $row['satellite_url'];
}

function datalist($no){				
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	$query=mysqli_query($con, "SELECT * FROM cluster WHERE No = ".$no);
	$row=mysqli_fetch_array($query);
	
	echo '<li><a href="#">Info Cluster :</a>
	<ul class="no-data menu vertical sublevel-1">
		<li><a class="subitem">Tipe Cluster : '.$row['Tipe Cluster'].'</a></li>
		<li><a class="subitem">Jenis Cluster : '.$row['Jenis Cluster'].'</a></li>
		<li><a class="subitem">Jumlah House Hold (Tenant) : '.$row['Jumlah House Hold (Tenant)'].'</a></li>
		<li><a class="subitem">Harga Rumah : '.$row['Harga Rumah'].'</a></li>
		<li><a class="subitem">'.$row['Jumlah Rumah yg Sdh LIS Telkom'].' rumah sudah LIS Telkom</a></li>
	</ul></li>';	

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

	echo '<li><a href="#">Info ODP :</a>
	<ul class="no-data menu vertical sublevel-1">
		<form action="page_view-ODP.php"><button class="button expanded">View List ODP</button></form>
		<li><a class="subitem">Jumlah ODP : '.$row['JML ODP'].'</a></li>
		<li><a class="subitem">ISI : '.$row['ISI'].'</a></li>
		<li><a class="subitem">AVAILABLE : '.$row['AVAI'].'</a></li>
		<li><a class="subitem">KAPASITAS : '.$row['KAP'].'</a></li>
	</ul>
	</li>';

}
?>