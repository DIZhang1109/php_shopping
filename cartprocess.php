<?php
	ob_start(); //set buffer on
	session_start(); //starting session

	// Include functions
	require_once('Functions/functioncart.php');

	// Process actions for this page
	processActions();
	
	header('Location: index.php?content_page=cart');
?>