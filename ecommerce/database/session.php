<?php
session_start();
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;

include('../config/db.php');
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

	//Sanitize the POST values
	$login = $_POST['correo'];
	$password = $_POST['password'];

	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}

$qry=$gbd->prepare("SELECT * FROM users WHERE email='$login'");

if ($qry->execute()) {
	if ($qry->rowCount()>0) {
		while($row=$qry->fetch(PDO::FETCH_OBJ)){
			if(password_verify($password,$row->password)){
				session_regenerate_id();
					$_SESSION['SESS_MEMBER_ID'] = $row->id;
					$_SESSION['SESS_correo'] = $row->email;
					session_write_close();
					header("location: ../view/auth/home.php");
				exit();
			}else{
				echo '<script> alert("Password incorrectos")</script>';
				echo "<script>history.back(-1);</script>";
			}
		}
	}else{
        echo '<script> alert("Usuario incorrectos")</script>';
        echo "<script>history.back(-1);</script>";
	}
}
?>