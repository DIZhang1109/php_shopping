<?php
	// Include functions
	require_once('functionadmin.php');
	
	shipOrder();
	
	header('Location: http://hyperdisc.unitec.ac.nz/zhangd47/php_assignment/index.php?content_page=manageorder');
?>