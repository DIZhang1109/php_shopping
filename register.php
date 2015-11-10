<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register User</title>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#frmRegister').bootstrapValidator({
			fields: {
				username: {
					validators: {
						notEmpty: {
							message: 'The username is required and cannot be empty'
						},
						stringLength: {
							max: 32,
							message: 'The username must be less than 30 characters long'
						},
						regexp: {
							regexp: /^[a-zA-Z0-9_]+$/,
							message: 'The username can only consist of alphabetical, number and underscore'
						}
					}
				},
				password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and cannot be empty'
                        },
                        identical: {
                            field: 'confirmpassword',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
				confirmpassword: {
                    validators: {
                        notEmpty: {
                            message: 'The confirm password is required and cannot be empty'
                        },
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
				email: {
					validators: {
						notEmpty: {
							message: 'The email is required and cannot be empty'
						},
						emailAddress: {
							message: 'The input is not a valid email address'
						}
					}
				},
				hometele: {
					message: 'The home telephone is not valid',
					validators: {
						notEmpty: {
							message: 'The home telephone number is required'
						},
						stringLength: {
							min: 10,
							max: 11,
							message: 'The home telephone number must be between 10 and 11 characters long'
						},
						regexp: {
							regexp: /^[0-9]+$/,
							message: 'The phone number can only consist of number'
						}
					}
				},
				worktele: {
					message: 'The work telephone is not valid',
					validators: {
						notEmpty: {
							message: 'The work telephone number is required'
						},
						stringLength: {
							min: 10,
							max: 11,
							message: 'The work telephone number must be between 10 and 11 characters long'
						},
						regexp: {
							regexp: /^[0-9]+$/,
							message: 'The phone number can only consist of number'
						}
					}
				},
				mobile: {
					validators: {
						notEmpty: {
							message: 'The mobilephone number is required'
						},
						stringLength: {
							min: 10,
							max: 11,
							message: 'The mobilephone number must be between 10 and 11 characters long'
						},
						regexp: {
							regexp: /^[0-9]+$/,
							message: 'The phone number can only consist of number'
						}
					}
				},
				address: {
					validators: {
						notEmpty: {
							message: 'The address is required'
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
            <form id="frmRegister" method="post" action="index.php?content_page=registeruser">
                <h2 style="margin-bottom: 25px; text-align: center;">Register</h2>
                <div class="form-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="User Name"
                        required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" type="email" placeholder="Email"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="hometele" name="hometele" placeholder="Home Telephone"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="worktele" name="worktele" placeholder="Work Telephone"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Phone"
                        required>
                </div>
                <div class="form-group">
                	<input type="text" class="form-control" id="address" name="address" placeholder="Address"
                        required>
                </div>
				<input class="btn btn-lg btn-success btn-block" type="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>
