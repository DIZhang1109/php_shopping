<div class="col-sm-8">
    <div class="form-area">
		<form id="frmHatM" class="form-horizontal" method="post" enctype="multipart/form-data" action="index.php?content_page=managehatupload">
        	<p class='lead'>HAT MANAGEMENT</p>
            <div class="form-group">
				<label class="control-label col-sm-3">Name:</label>
              	<div class="col-sm-8">
                	<input type="text" class="form-control" id="hatname" name="hatname" placeholder="Enter Hat Name" required>
				</div>
            </div>
			<div class="form-group">
				<label class="control-label col-sm-3">Description:</label>
              	<div class="col-sm-8">
                	<input type="textarea" class="form-control" id="hatdesc" name="hatdesc" placeholder="Enter Hat Description" required>
				</div>
            </div>
			<div class="form-group">
				<label class="control-label col-sm-3">Price:</label>
              	<div class="col-sm-8">
                	<input type="text" class="form-control" id="hatprice" name="hatprice" placeholder="Enter Hat Price" required>
				</div>
            </div>
            <div class="form-group">
				<label class="control-label col-sm-3">Category:</label>
                <div class="col-sm-8">
                	<select class="form-control" id="hatcategory" name="hatcategory">
					<?php
                        $mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
                        $sql = "SELECT * FROM `CATEGORY`";
                        $result = $mysqli->query($sql);
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo '<option>'.$row["CATEGORYNAME"].'</option>';
                            }
                        } else {
                            echo 'error!!!';		
                        }
						$mysqli->close();
                    ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
				<label class="control-label col-sm-3">Supplier:</label>
                <div class="col-sm-8">
                    <select class="form-control" id="hatsupplier" name="hatsupplier">
                    	<?php
							$mysqli = new mysqli("localhost", "zhangd47", "15021988", "zhangd47mysql2");
							$sql = "SELECT * FROM `SUPPLIER`";
							$result = $mysqli->query($sql);
							if($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<option>".$row["SUPPLIERID"]."</option>";
								}
							} else {
								echo 'error!!!';		
							}
							$mysqli->close();
						?>
                    </select>
                </div>
            </div>
            <div class="form-group">
				<label class="control-label col-sm-3">Photo:</label>
              	<div class="col-sm-8">
                	<input type="file" class="file" id="fileToUpload" name="fileToUpload">
				</div>
            </div>
            <div class="form-group">        
              	<div class="col-sm-offset-3 col-sm-2">
                    <input class="btn btn-sm btn-success" type="submit" value="Create Hat" />
              	</div>
            </div>
        </form>
    </div>
</div>