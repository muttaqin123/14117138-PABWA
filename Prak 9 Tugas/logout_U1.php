<?php 
	
	session_start();
	$_SESSION = [];
	session_unset();
	session_destroy();

	header("location: login_U1.php");
	exit;
	
 ?>