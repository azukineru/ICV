<?php
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "ojt");
	
	session_start();
	
	$user_check=$_SESSION['login_user'];
	$query=mysqli_query($con, "SELECT username FROM account WHERE username='$user_check'");
	$row=mysqli_fetch_assoc($query);
	
	$login_session=$row['username'];
	
	if(!isset($login_session)){
		mysqli_close($con);
		//header('Location:index.php');
	}
?>