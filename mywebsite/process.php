<?php ob_start();



	if(isset($_POST['submit'])) {
		
	$to = "edwin@codingfaculty.com";
	$name = $_POST['name']
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$txt = $_POST['message'];
	$headers = "From: " .$email . "\r\n" .
	"CC: somebodyelse@example.com";
	
	mail($to,$name,$subject,$txt,$headers);
	
	header("Location: contact.html");