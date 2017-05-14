<?php
	$con=mysql_connect("localhost", "root", "");
	mysql_select_db("ojt");
	
	session_start();
	
	$user_check=$_SESSION['login_user'];
	$query=mysql_query("SELECT username FROM account WHERE username='$user_check'");
	$row=mysql_fetch_assoc($query);
	
	$login_session=$row['username'];
	
	if(!isset($login_session)){
		mysql_close($con);
		header('Location:index.php');
	}
?>