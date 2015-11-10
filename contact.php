<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#frmContact').bootstrapValidator({
				fields: {
					name: {
						validators: {
							notEmpty: {
								message: 'The username is required and cannot be empty'
							},
							regexp: {
								regexp: /^[a-zA-Z ]+$/,
								message: 'The username can only consist of alphabetical and space'
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
					address: {
						validators: {
							notEmpty: {
								message: 'The address is required'
							}
						}
					},
					phone: {
						validators: {
							notEmpty: {
								message: 'The phone number is required'
							},
							stringLength: {
								min: 10,
								max: 11,
								message: 'The phone number must be between 10 and 11 characters long'
							},
							regexp: {
								regexp: /^[0-9]+$/,
								message: 'The phone number can only consist of number'
							}
						}
					}
				}
			});
		});

		function btnSubmit_OnClick() {
			if (confirm("Do you want to submit the message now?")) {
				alert('Thanks for you reply!!!');
				window.location.href = 'index.php?content_page=home';
			}
		}
    </script>
</head>

<body>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-area">
            <form role="form" id="frmContact">
            <h2 style="margin-bottom: 25px; text-align: center;">
                Contact Us</h2>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="phone" placeholder="Phone"
                        required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
                        required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Message"
                        maxlength="140" rows="7"></textarea>
                </div>
                <input class="btn btn-primary pull-right" type="submit" id="submit" name="submit" value="Submit Form" onclick="btnSubmit_OnClick()">
            </form>
        </div>
    </div>
</body>
</html>
