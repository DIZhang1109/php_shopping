<script src="Scripts/bootbox.min.js"></script>
<script src="Scripts/bootstrap.min.js"></script>
<script src="Scripts/jquery-2.1.4.min.js"></script>

<?php
    ob_start();

	// include the login function
   	require_once('Functions/functionlogin.php');
    
	// if the user has input username and password
	if (isset($_POST['username']) and isset($_POST['password'])) {
		$_SESSION['flag'] = false;
		$_SESSION['admin'] = false;
		
		// call the pre-defined function and check if admin is authenticated
		if(checkAdmin($_POST['username'], $_POST['password'])){
			$_SESSION['admin'] = true;
			$redirect_page = "http://hyperdisc.unitec.ac.nz/zhangd47/php_assignment/admin.php";
			header("Location: ".$redirect_page);
			exit;
		}
		// call the pre-defined function and check if user is authenticated
		if (checkCrendentials($_POST['username'], $_POST['password'])) {
			$_SESSION['flag'] = true;
			$_SESSION['current_user'] = $_POST['username'];

			ob_end_clean();
			$redirect_page = "http://hyperdisc.unitec.ac.nz/zhangd47/php_assignment/index.php";
			header("Location: ".$redirect_page);
		} else {
			// call the pre-defined function and check if user is disabled
			if(checkDisabled($_POST['username'], $_POST['password'])) {
				echo "<script>bootbox.alert('You account has been disabled')</script>";
				//echo '<p>Content here. <a class="alert" href=#>Alert!</a></p>';
			} else {
				echo "<script>bootbox.alert('Please input correct username and password');</script>";
			}
		}
	}
?>

<div class="col-md-6 col-md-offset-3">
	<div class="form-area">
        <form id="frmLogin" method="post">
			<h2 style="margin-bottom: 25px; text-align: center;">
				Log In</h2>
			<div class="form-group">
				<input type="text" class="form-control" id="username" name="username" placeholder="User Name">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			</div>
			<div class="checkbox">
				<label>
					<input name="remember" type= "checkbox" value="Remember Me">Remember Me
				</label>
			</div>
			<input class="btn btn-lg btn-success btn-block" type="submit" value="Log in">
		</form>
	</div>
</div>