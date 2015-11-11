<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ladies</title>
</head>

<body>
	<?php
        $mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
        
        $sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Ladies'";
        $result = $mysqli->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "NAME: " . $row["HATNAME"]. " ; DESC: " . $row["HATDESC"]. " ; PRICE: " . $row["PRICE"]. "<br>";
                echo '<img src="' .$row["PATH"]. '" alt="HTML5 Icon" style="width:128px;height:128px">';
            }
        } else {
            echo "0 results";
        }
    ?>
</body>
</html>
