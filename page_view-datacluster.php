<?php
	include('session.php');
	include('datalist.php');
	
	$segment=$_GET['segment'];
	$no=$_GET['no'];
	$search=$_GET['search'];
	
	if($search==1){
		$backpage='page_view-segments.php';
	}else{
		$backpage='page_view-listcluster-'.$segment.'.php';
	}
?>

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ICD | Cluster Data</title>

	<link rel="stylesheet" type="text/css" href="bower_components/foundation/css/foundation2.min.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/normalize.min.css" />
	<link rel="stylesheet" type="text/css" href="fonts/foundation-icons.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/custom.css" />

	<script type="text/javascript" src="js/modernizr.min.js"></script>
</head>
<body>
	<div class="off-canvas-wrapper">
		<div class="row expanded large-12 header-cluster hide-for-small-only">
			<div class="large-3 large-push-1 columns">
				<a href="<?php echo $backpage; ?>"><i class="fi-arrow-left medium"> Back</i></a>
			</div>
			<div class="large-9 large-pull-1 columns">
				<h1 class="right text-white text-center"><?php clustername($no); ?></h1>			
			</div>
		</div>	

		<div class="row expanded large-12" style="height:100%;">
			<div class="title-bar hide-for-large">
				<div class="title-bar-left">
					<a href="<?php echo $backpage; ?>"><i class="fi-arrow-left medium"> Back</i></a>
				</div>
			</div>
			<div class="title-bar hide-for-large bg-red">
				<div class="title-bar-right">
					<h2><?php clustername($no); ?></h2>
				</div>
			</div>
			<div class="large-5 columns position-left map-content inner" role="content">
				<br>
				<h3>Map</h3>
				<div class="row">
					<div class="large-9 small-centered columns map-image">
						<img class="thumbnail" src="http://placehold.it/800x500">
					</div>
				</div>
			</div>

			<aside class="large-7 columns float-right inner" style="height: 100%; background-color: #DFD9B9;">
				<br>
				<h3>Cluster Data</h3>
				<ul>
					<?php
						datalist($no);
					?>
				</ul>
			</aside>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>
