<script src="Scripts/bootbox.min.js"></script>
<script src="Scripts/bootstrap.min.js"></script>
<script src="Scripts/jquery-2.1.4.min.js"></script>

<?php
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = 'Welcome to contact Quality Hats!!! Your address: '.$_POST['address'].'. Your Phone: '.$_POST['phone'].'. You Message: '.$_POST['message'];
    $header = 'From: taylorzhang0215@gmail.com';
    mail($to,$subject,$message, $header);
	echo '<script>bootbox.alert("Thank you for contacting us!!!");</script>';
?>