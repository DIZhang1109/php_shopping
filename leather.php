<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Leather</title>
</head>

<body>
	<p class="lead">LEATHER</p>
	
    <div class="row">

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
            	<?php
					$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
					$sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Leather' LIMIT 0, 1";
					$result = $mysqli->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<img src="' .$row["PATH"]. '" alt="Hat" style="width:320px;height:210px">';
						}
					}
				?>
                <div class="caption">
                    <h4 class="pull-right">
                    	<?php
							$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
							$sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Leather' LIMIT 0, 1";
							$result = $mysqli->query($sql);
							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo '$' . $row["PRICE"];
								}
							}
						?>
                    </h4>
                    <h4>
                    	<?php
							$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
							$sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Leather' LIMIT 0, 1";
							$result = $mysqli->query($sql);
							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo $row["HATNAME"];
								}
							}
						?>
                    </h4>
                    <p>
                    	<?php
							$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
							$sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Leather' LIMIT 0, 1";
							$result = $mysqli->query($sql);
							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo $row["HATDESC"];
								}
							}
						?>
                    </p>
                    <input class="btn btn-primary pull-right" type="submit" value="Add to Cart">
                </div>
            </div>
        </div>
        
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
				<?php
					$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
					$sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Leather' LIMIT 1, 1";
					$result = $mysqli->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<img src="' .$row["PATH"]. '" alt="Hat" style="width:320px;height:210px">';
						}
					}
				?>
                <div class="caption">
                    <h4 class="pull-right">$64.99</h4>
                    <h4><a href="#">Second Product</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">12 reviews</p>
                    <p>

                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
				<?php
					$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
					$sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Leather' LIMIT 2, 1";
					$result = $mysqli->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<img src="' .$row["PATH"]. '" alt="Hat" style="width:320px;height:210px">';
						}
					}
				?>
                <div class="caption">
                    <h4 class="pull-right">$74.99</h4>
                    <h4><a href="#">Third Product</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">31 reviews</p>
                    <p>

                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
				<?php
					$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
					$sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Leather' LIMIT 3, 1";
					$result = $mysqli->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<img src="' .$row["PATH"]. '" alt="Hat" style="width:320px;height:210px">';
						}
					}
				?>
                <div class="caption">
                    <h4 class="pull-right">$84.99</h4>
                    <h4><a href="#">Fourth Product</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">6 reviews</p>
                    <p>

                    </p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
				<?php
					$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
					$sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Leather' LIMIT 4, 1";
					$result = $mysqli->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<img src="' .$row["PATH"]. '" alt="Hat" style="width:320px;height:210px">';
						}
					}
				?>
                <div class="caption">
                    <h4 class="pull-right">$94.99</h4>
                    <h4><a href="#">Fifth Product</a>
                    </h4>
                    <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="ratings">
                    <p class="pull-right">18 reviews</p>
                    <p>

                    </p>
                </div>
            </div>
        </div>
        </div>
    
	<?php
        $mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
        
        $sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Leather'";
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
