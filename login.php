<?php
	session_start();
	$error='';
	
	if(isset($_POST['login'])){
		if(empty($_POST['username'])||empty($_POST['password'])){
			$error="Username and Password is required to log in";
		}else{
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$username=stripslashes($username);
			$password=stripslashes($password);
			$username=mysql_real_escape_string($username);
			$password=md5(mysql_real_escape_string($password));
			
			$con=mysql_connect("localhost", "root", "");
			mysql_select_db("ojt");
			
			$query=mysql_query("SELECT * FROM account WHERE username='$username' AND password='$password'");
			
			if(mysql_num_rows($query)==1){
				$_SESSION['login_user']=$username;
				header("Location:dashboard.html");
			}else{
				$error="Username or Password is invalid";
			}
			mysql_close($con);
		}	
	}
?>