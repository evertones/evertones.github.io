<?php
	// Check if all fields have a value
	// The interface validates with bootstrap the required fields
	if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["message"])) {
		$to = "everton.schneider@gmail.com";

		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];

		$msg =  "NAME: " . $name . "\n\n";
		$msg += "E-MAIL: " . $email . "\n\n";
		$msg += "MESSAGE: \n" . $message . "\n\n";

		$mail_sent = mail($to, "[evertones.org] " . $subject, $msg);

		if($mail_sent) {
			echo "Sucess"
		} else { 
			echo "Fail";
		}
	}
?>