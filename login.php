<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In</title>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#frmLogin').bootstrapValidator({
				fields: {
					username: {
						validators: {
							notEmpty: {
								message: 'The username is required and cannot be empty'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'The password is required and cannot be empty'
							}
						}
					}
				}
			});
		});
    </script>
</head>

<body>
	<div class="col-md-6 col-md-offset-3">
        <div class="form-area">
            <form id="frmLogin" method="post" action="index.php?content_page=loginuser">
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
</body>
</html>