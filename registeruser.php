<?php
$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}

$sql = "SELECT *  FROM `CUSTOMER` WHERE USERNAME='".$_POST['username']."'";
$result = $mysqli->query($sql);

if(!mysqli_num_rows($result)>0) {
	$sql = "INSERT INTO CUSTOMER(USERNAME, PASSWORD, EMAIL, HOMETELE, WORKTELE, MOBILE, ADDRESS, ADMIN, DISABLE) VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['email']."','".$_POST['hometele']."','".$_POST['worktele']."','".$_POST['mobile']."','".$_POST['address']."','N','false')";
	if (!$mysqli->query($sql)) {
		echo "SQL operation failed: (" . $mysqli->errno . ") " . $mysqli->error;
	} else {
		echo '<script>alert("Congratulations!!! You\'ve registered successfully!!!");</script>';
		// send email to user
		$to = $_POST['email'];
		$subject = 'New register on Quality Hats';
		$message = 'Congratulations on your registration!!! Your user name: '.$_POST['username'].'. Your Password: '.$_POST['password'];
		$header = 'From: taylorzhang0215@gmail.com';
		mail($to,$subject,$message, $header);
		echo "<script>window.location.assign('index.php?content_page=home');</script>";
	}
} else {
	echo '<script>alert("The username has already registered. Please try another one");</script>';
	echo "<script>window.location.assign('index.php?content_page=register');</script>";
	exit;
}
?>