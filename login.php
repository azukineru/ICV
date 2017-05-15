<?php
	session_start();
	$error='';
	
	if(isset($_POST['login'])){
<<<<<<< HEAD
=======
		$con=mysqli_connect("localhost", "root", "");
		mysqli_select_db($con, "ojt");

>>>>>>> experiment
		if(empty($_POST['username'])||empty($_POST['password'])){
			$error="Username and Password is required to log in";
		}else{
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$username=stripslashes($username);
			$password=stripslashes($password);
<<<<<<< HEAD
			$username=mysql_real_escape_string($username);
			$password=md5(mysql_real_escape_string($password));
			
			$con=mysql_connect("localhost", "root", "");
			mysql_select_db("ojt");
			
			$query=mysql_query("SELECT * FROM account WHERE username='$username' AND password='$password'");
			
			if(mysql_num_rows($query)==1){
=======
			$username=mysqli_real_escape_string($con, $username);
			$password=md5(mysqli_real_escape_string($con, $password));
			
			
			
			$query=mysqli_query($con, "SELECT * FROM account WHERE username='$username' AND password='$password'");
			
			if(mysqli_num_rows($query)==1){
>>>>>>> experiment
				$_SESSION['login_user']=$username;
				header("Location:dashboard.html");
			}else{
				$error="Username or Password is invalid";
			}
<<<<<<< HEAD
			mysql_close($con);
=======
			mysqli_close($con);
>>>>>>> experiment
		}	
	}
?>