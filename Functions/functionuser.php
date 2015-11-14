<?php
	$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
	
	// Display user details
	function displayUserDetails() {
		global $mysqli;
		$username=$_SESSION['current_user'];
		$sql = "SELECT * FROM `CUSTOMER` WHERE USERNAME = '".$username."'";
		$result = $mysqli->query($sql);
		
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<div class='col-md-12'><p class='lead'>USER INFORMATION</p><table class='table table-hover'><thead><tr><th>USERNAME</th><th>EMAIL</th><th>MOBILE</th><th>ADDRESS</th></tr></thead><tbody><tr><td class='col-md-3'>".$row["USERNAME"]."</td><td class='col-md-3'>".$row["EMAIL"]."</td><td class='col-md-3'>".$row["MOBILE"]."</td><td class='col-md-3'>".$row["ADDRESS"]."</td></tr></tbody></table></div>";
			}
		} else {
			echo 'error!!!';		
		}
		$mysqli->close();
	}
	
	// Display order details
	function displayUserOrders() {
		global $mysqli;
		$username=$_SESSION['current_user'];
		$sql = "SELECT `CUSTOMERID` FROM `CUSTOMER` WHERE `USERNAME` = '".$username."'";
		$result = $mysqli->query($sql);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$CUSTOMERID = $row['CUSTOMERID'];
			}
		} 
		$sql = "SELECT * FROM `HATORDER` WHERE `CUSTOMERID` = '".$CUSTOMERID."'";
		$result = $mysqli->query($sql);
		$output[] = "<div class='col-md-12'><p class='lead'>ORDER DETAILS</p><table class='table table-hover'><thead><tr><th>ORDER NO.</th><th>STATUS</th><th>PRICE</th></tr></thead><tbody>";
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$output[] = "<tr><td class='col-md-4'>".$row["ORDERID"]."</td><td class='col-md-4'>".$row["STATUS"]."</td><td class='col-md-4'>".$row["TOTAL"]."</td></tr>";
			}
			$output[] = "</tbody></table></div>";
		} else {
			$output[] ="<p>You don't have any orders currently...</p>";
		}
		return join('',$output);
		$mysqli->close();
	}
?>