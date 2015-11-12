<p class="lead">LEATHER</p>
<div class="row">
<?php
    $mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
    $sql = "SELECT * FROM `HAT` WHERE CATEGORY = 'Leather'";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div class="col-sm-4 col-lg-4 col-md-4"><div class="thumbnail">'.'<img src="'.$row["PATH"].'" alt="Hat" style="width:320px;height:210px">'.'<div class="caption"><h4 class="pull-right"><b>$'.$row["PRICE"].'</b></h4><h4><b>'.$row["HATNAME"].'</b></h4><p>'.$row["HATDESC"].'</p><p><a href="#" class="btn btn-primary">Buy Now!</a></p></div></div></div>';
        }
    }
?>
</div>