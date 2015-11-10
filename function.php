<?php
function checkAdmin($username,$password) {
	$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
		
	// query the users table for name and surname 
	$sql = "SELECT * FROM `CUSTOMER` WHERE USERNAME = '".$username."' AND PASSWORD ='".$password."'";
	echo $sql;
	$result = $mysqli->query($sql);
	
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["ADMIN"] == "Y")
			{
				return (true);
				
			} else {
				return (false);
			}
		}
	} else {
		return (false);	
	}
}

function checkUser($username,$password) {
	$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
		
	// query the users table for name and surname 
	$sql = "SELECT * FROM `CUSTOMER` WHERE USERNAME = '".$username."' AND PASSWORD ='".$password."'";
	echo $sql;
	$result = $mysqli->query($sql);
	
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["DISABLE"] == "false")
			{
				return (true);
				
			} else {
				return (false);
			}
		}
	} else {
		return (false);	
	}
}

function checkBlock($username,$password) {
	$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
		
	// query the users table for name and surname 
	$sql = "SELECT * FROM `CUSTOMER` WHERE USERNAME = '".$username."' AND PASSWORD ='".$password."'";
	echo $sql;
	$result = $mysqli->query($sql);
	  
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if($row["DISABLE"] == "true")
			{
				return (true);
				
			} else {
				return (false);
			}
		}
	}
}

?>