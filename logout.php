<?php
	session_start(); //starting session
	unset($_SESSION['flag']);
	unset($_SESSION['admin']);
	//redirecting user to the login page
	header("Location: http://hyperdisc.unitec.ac.nz/zhangd47/php_assignment/index.php");
	exit;
?>