<?php
	// Check if all fields have a value
	// The interface validates with bootstrap the required fields
	if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$to = "everton.schneider@gmail.com";

		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];

		$msg =  "NAME: " . $name . "\n\n";
		$msg .= "E-MAIL: " . $email . "\n\n";
		$msg .= "MESSAGE: \n" . $message . "\n\n";

		$mail_sent = mail($to, "[evertones.org] " . $subject, $msg);

		if($mail_sent) {
			echo "SUCCESS";
		} else { 
			echo "FAIL";
		}
	} else {
		echo "FAIL";
	}
?>