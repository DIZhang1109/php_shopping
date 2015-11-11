<?php
function getConn(){
    $servername = "localhost";
    $username = "zhangd47";
    $password = "15021988";
	$database = "zhangd47mysql2";
    $conn = null;

    if($conn == null) {
        $conn = mysqli_connect($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            echo "Connection failed";
        }
    }
    return $conn;
}
?>