<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Everton Eckert Schneider</title>
	
	<!-- Bootstrap Libraries -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		$to = "everton.schneider@gmail.com";
	
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
		
		$msg =  "NAME: " . $name . "\n\n";
		$msg += "E-MAIL: " . $email . "\n\n";
		$msg += "MESSAGE: \n" . $message . "\n\n";
		
		$mail_sent = mail($to, "[evertones.org] " . $subject, $msg);
		
		if($mail_sent) { ?>
			<h2>Message successfully sent!</h2>
	<?php 
		else { 
	?>
			<h2>Fail to send message!</h2>
			<br />
			Please send a message manually to 'everton.schneider(at)gmail.com'
			<br />
			<br />
			Your original message: <br />
	<?php	
			echo $msg;
		} 
	?>
</body>
</html>