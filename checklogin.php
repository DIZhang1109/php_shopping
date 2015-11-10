<?php
    

    //checking if user is not authenticated
	if (!isset($_SESSION['flag']) || ($_SESSION['flag'] == false))
    {
		if (!$_GET['content_page'])
		{
		$full_name = $_SERVER['PHP_SELF'];
		$full_name = str_replace(".php","",$full_name);
		$full_name = str_replace("/zhangd47/php_assignment/","",$full_name);
		}
		else
		{
        //save the current page name from the input parameter of WA2014.php
		$full_name = $_GET['content_page'];
		}
		
		//Save the file name requested initially
		$_SESSION['request_page'] = $full_name;
		//redirecting user to the login page
		header("Location: http://hyperdisc.unitec.ac.nz/zhangd47/php_assignment/login.php");
        exit;
    }
	
?>
