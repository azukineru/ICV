<?php
	include('login.php');
	
	if(isset($_SESSION['login_user'])){
		header("Location: dashboard.php");
	}
?>

<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ICD | Welcome to ICD</title>

	<link rel="stylesheet" type="text/css" href="stylesheets/normalize.min.css" />
	<link rel="stylesheet" type="text/css" href="bower_components/foundation/scss/foundation.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/custom.css" />
	<link rel="stylesheet" type="text/css" href="fonts/foundation-icons.css" />

	<script type="text/javascript" src="js/modernizr.min.js"></script>
</head>
<body>
	<div class="large-12" style="height: 150px; width:100%;">
	</div>
	<br>
	<div class="row">
		<div class="large-6 column desktop-only">
			<div class="row">
				<div class="large-9 small-centered columns">
					<div class="row">
						<div class="small-8 small-centered columns">
							<img src="image/logo-telkom.png">
						</div>
						<br>
						<div class="small-8 small-centered columns">
							<img src="image/logo-jago.jpg">
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>

		<div class="large-6 column">
			<div class="row">
				<div class="large-9 small-centered columns">
					<div class="row">
						<div class="large-9 small-centered columns"><h4><b>IndiHome Cluster Digitalization</b></h4></div>
						<div class="large-9 small-centered columns"><h6>Witel Semarang</h6></div><br>
						<form action="" method="post">
							<span><?php echo $error; ?></span>
							<div class="large-9 small-centered columns">
								<input type="text" placeholder="Username" name="username"/>
							</div>
							<div class="large-9 small-centered columns">
								<input type="password" placeholder="Password" name="password"/>
							</div>
							<div class="large-9 small-centered columns">
								<button class="button tiny expand round" name="login" type="submit">Login</button>
							</div>	
						</form>	
						<div class="large-9 small-centered columns"><a href="#">Create new account</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<br><br>
	<div id="footer" class="hide-for-small-only">
		<div class="large-12 columns">
			<hr/>
			<div class="row">
				<div class="large-6 small-centered columns">
					<p>Copyright © 2017 - Telkom Indonesia</p>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/foundation.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>
