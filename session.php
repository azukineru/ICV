<?php
<<<<<<< HEAD
	$con=mysql_connect("localhost", "root", "");
	mysql_select_db("ojt");
=======
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
>>>>>>> experiment
	
	session_start();
	
	$user_check=$_SESSION['login_user'];
<<<<<<< HEAD
	$query=mysql_query("SELECT username FROM account WHERE username='$user_check'");
	$row=mysql_fetch_assoc($query);
=======
	$query=mysqli_query($con, "SELECT username FROM account WHERE username='$user_check'");
	$row=mysqli_fetch_assoc($query);
>>>>>>> experiment
	
	$login_session=$row['username'];
	
	if(!isset($login_session)){
<<<<<<< HEAD
		mysql_close($con);
		header('Location:index.php');
=======
		mysqli_close($con);
		//header('Location:index.php');
>>>>>>> experiment
	}
?>