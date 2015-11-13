<?php
	$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");

	// Check if it is an admin account
	function checkAdmin($username,$password) {
		global $mysqli;
		
		// query the users table for name and surname 
		$sql = "SELECT * FROM `CUSTOMER` WHERE USERNAME = '".$username."' AND PASSWORD ='".$password."'";
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
		$mysqli->close();
	}

	// Check if user has input correct username and password
	function checkCrendentials($username,$password) {
		global $mysqli;
		
		// query the users table for name and surname 
		$sql = "SELECT * FROM `CUSTOMER` WHERE USERNAME = '".$username."' AND PASSWORD ='".$password."'";
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
		$mysqli->close();
	}
	
	// Check if user has been disabled
	function checkDisabled($username,$password) {
		global $mysqli;
		
		// query the users table for name and surname 
		$sql = "SELECT * FROM `CUSTOMER` WHERE USERNAME = '".$username."' AND PASSWORD ='".$password."'";
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
		$mysqli->close();
	}
?>