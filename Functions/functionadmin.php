<script src="Scripts/bootbox.min.js"></script>
<script src="Scripts/bootstrap.min.js"></script>
<script src="Scripts/jquery-2.1.4.min.js"></script>

<?php
	$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
	
	// Display user details
	function displayAllUser() {
		global $mysqli;
		$sql = "SELECT * FROM `CUSTOMER`";
		$result = $mysqli->query($sql);
		$output[] = "<div class='col-md-12'><p class='lead'>CUSTOMER MANAGEMENT</p><form id='customerM' method='post'><table class='table table-hover'><thead><tr><th>USERNAME</th><th>EMAIL</th><th>STATUS</th><th></th></tr></thead><tbody>";
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$output[] = "<tr><td class='col-md-3'>".$row["USERNAME"]."</td><td class='col-md-5'>".$row["EMAIL"]."</td><td class='col-md-2'>".$row["DISABLE"]."</td><td class='col-md-2'><a href='Functions/disableuser.php?id=".$row["CUSTOMERID"]."' class ='btn btn-danger'>Disable</a></td></tr>";
			}
			$output[] = "</tbody></table></form></div>";
		} else {
			echo 'error!!!';		
		}
		return join('',$output);
		$mysqli->close();
	}

	// Disable user
	function disableUser() {
		global $mysqli;
		$sql = "UPDATE `CUSTOMER` SET DISABLE = 'true' WHERE CUSTOMERID = '".$_GET['id']."'";
		$result = $mysqli->query($sql);
		if ($mysqli->query($sql) === TRUE) {
			echo "<script>alert('Chosen customer has been disabled successfully!!!');</script>";
		} else {
			echo "error!!!";
		}
		$mysqli->close();
	}

	// Display user details
	function displayAllOrder() {
		global $mysqli;
		$sql = "SELECT * FROM `HATORDER`";
		$result = $mysqli->query($sql);
		$output[] = "<div class='col-md-12'><p class='lead'>ORDER MANAGEMENT</p><form id='orderM' method='post'><table class='table table-hover'><thead><tr><th>ORDER NO.</th><th>CUSTOMER NO.</th><th>STATUS</th><th>PRICE</th><th></th></tr></thead><tbody>";
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$output[] = "<tr><td class='col-md-2'>".$row["ORDERID"]."</td><td class='col-md-2'>".$row["CUSTOMERID"]."</td><td class='col-md-2'>".$row["STATUS"]."</td><td class='col-md-2'>$".$row["TOTAL"]."<td class='col-md-4'><a href='Functions/waitorder.php?id=".$row["ORDERID"]."' class ='btn btn-primary'>WAITED</a><a href='Functions/shiporder.php?id=".$row["ORDERID"]."' class ='btn btn-success'>SHIPPED</a></td></tr>";
			}
			$output[] = "</tbody></table></form></div>";
		} else {
			echo 'error!!!';		
		}
		return join('',$output);
		$mysqli->close();
	}

	// Ship order
	function shipOrder() {
		global $mysqli;
		$sql = "UPDATE `HATORDER` SET STATUS = 'SHIPPED' WHERE ORDERID = '".$_GET['id']."'";
		$result = $mysqli->query($sql);
		if ($mysqli->query($sql) === TRUE) {
			echo "<script>alert('Chosen order has been shipped successfully!!!');</script>";
		} else {
			echo "error!!!";
		}
		$mysqli->close();
	}

	// Wait order
	function waitOrder() {
		global $mysqli;
		$sql = "UPDATE `HATORDER` SET STATUS = 'WAIT' WHERE ORDERID = '".$_GET['id']."'";
		$result = $mysqli->query($sql);
		if ($mysqli->query($sql) === TRUE) {
			echo "<script>alert('Chosen order has been waited successfully!!!');</script>";
		} else {
			echo "error!!!";
		}
		$mysqli->close();
	}
?>