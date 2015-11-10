<?php
//Retrieve the requested content page name and construct the file name
if (isset($_GET['content_page']))
{
   $page_name = $_GET['content_page'];
   $page_content = $page_name . '.php';
}
elseif (isset($_POST['content_page']))
{
   $page_name = $_POST['content_page'];
   $page_content = $page_name . '.php';
}
else
{
	$page_content = 'home.php';
}
//This must be below the setting of $page_content 
include('master.php');
?>
