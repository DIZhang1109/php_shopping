<script src="Scripts/bootbox.min.js"></script>
<script src="Scripts/bootstrap.min.js"></script>
<script src="Scripts/jquery-2.1.4.min.js"></script>

<?php
	$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
	if (isset($_POST['suppliername'])) {
		$sql = "INSERT INTO `SUPPLIER`(`SUPPLIERNAME`,`WORKTELE`,`EMAIL`) VALUES ('".$_POST['suppliername']."','".$_POST['supplierphone']."','".$_POST['supplieremail']."')";
		if ($mysqli->query($sql) === TRUE) {
			echo "<script>bootbox.alert('New supplier created successfully!!!');</script>";
		} else {
			echo "error!!!";
		}
	}
	$mysqli->close();
?>

<div class="col-sm-8">
    <div class="form-area">
        <form id="frmSupplierM" class="form-horizontal" method="post">
            <p class='lead'>SUPPLIER MANAGEMENT</p>
            <div class="form-group">
				<label class="control-label col-sm-3">Name:</label>
              	<div class="col-sm-6">
                	<input type="text" class="form-control" id="suppliername" name="suppliername" placeholder="Enter Supplier Name" required>
				</div>
            </div>
			<div class="form-group">
				<label class="control-label col-sm-3">Telephone:</label>
              	<div class="col-sm-6">
                	<input type="text" class="form-control" id="supplierphone" name="supplierphone" placeholder="Enter Supplier Phone" required>
				</div>
            </div>
			<div class="form-group">
				<label class="control-label col-sm-3">Email:</label>
              	<div class="col-sm-6">
                	<input type="text" class="form-control" id="supplieremail" name="supplieremail" placeholder="Enter Supplier Email" required>
				</div>
            </div>
            <div class="form-group">        
              	<div class="col-sm-offset-3 col-sm-2">
                    <input class="btn btn-sm btn-success" type="submit" value="Create Supplier" />
              	</div>
            </div>
        </form>
    </div>
</div>