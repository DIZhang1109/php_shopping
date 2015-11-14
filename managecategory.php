<script src="Scripts/bootbox.min.js"></script>
<script src="Scripts/bootstrap.min.js"></script>
<script src="Scripts/jquery-2.1.4.min.js"></script>

<?php
	$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
	if (isset($_POST['categoryname'])) {
		$sql = "INSERT INTO `CATEGORY`(`CATEGORYNAME`) VALUES ('".$_POST['categoryname']."')";
		if ($mysqli->query($sql) === TRUE) {
			echo "<script>bootbox.alert('New category created successfully!!!');</script>";
		} else {
			echo "error!!!";
		}
	}
	$mysqli->close();
?>

<div class="col-sm-8">
    <div class="form-area">
        <form id="frmCategoryM" class="form-horizontal" method="post">
            <p class='lead'>CATEGORY MANAGEMENT</p>
            <div class="form-group">
				<label class="control-label col-sm-3">Name:</label>
              	<div class="col-sm-6">
                	<input type="text" class="form-control" id="categoryname" name="categoryname" placeholder="Enter Category Name" required>
				</div>
            </div>
            <div class="form-group">        
              	<div class="col-sm-offset-3 col-sm-2">
                    <input class="btn btn-sm btn-success" type="submit" value="Create Category" />
              	</div>
            </div>
        </form>
    </div>
</div>