<?php
if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message'])){
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$from = $_POST["email"]; // sender
		$subject = 'Website: '+$_POST['name'];
		$message = $_POST["message"];
		// message lines should not exceed 70 characters (PHP rule), so wrap it
		$message = wordwrap($message, 70);
		// send mail
		echo mail("simonnouwens@gmail.com",$subject,$message,"From: $from\n");
	}
}
?>