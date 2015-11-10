<?php
    ob_start();
    session_start();

	// include the login function
   require_once('Functions/functionlogin.php');
    
	// if the user has input username and password
	if (isset($_POST['username']) and isset($_POST['password'])) {
		$_SESSION['flag'] = false;
		$_SESSION['admin'] = false;
		
		// call the pre-defined function and check if admin is authenticated
		if(checkAdmin($_POST['username'], $_POST['password'])){
			$_SESSION['admin'] = true;
			$redirect_page = "http://hyperdisc.unitec.ac.nz/zhangd47/php_assignment/admin.php";
			header("Location: ".$redirect_page);
			exit;
		}
		// call the pre-defined function and check if user is authenticated
		if (checkCrendentials($_POST['username'], $_POST['password'])) {
			$_SESSION['flag'] = true;
			$_SESSION['current_user'] = $_POST['form_username'];
				
			ob_end_clean();
			$redirect_page = "http://hyperdisc.unitec.ac.nz/zhangd47/php_assignment/index.php";
			header("Location: ".$redirect_page);
		} else {
			// call the pre-defined function and check if user is disabled
			if(checkDisabled($_POST['username'], $_POST['password'])) {
				echo "<script>alert('You account has been disabled');</script>";
			} else {
				echo "<script>alert('Please input correct username and password');</script>";
			}
			echo "<script>window.location.assign('index.php?content_page=login');</script>";
		}
	}
?>