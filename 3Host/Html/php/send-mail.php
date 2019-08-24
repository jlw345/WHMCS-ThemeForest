<?php
	$to = "jm@iwthemes.com"; /*Your Email*/
	$subject = "Messsage from StarHost"; /*Issue*/
	$date = date ("l, F jS, Y"); 
	$time = date ("h:i A"); 	
	$Email=$_GET['Email'];
	$Name=$_GET['Name'];
	$Subject=$_GET['Subject'];
	$Message=$_GET['message'];

	$msg="Message sent\n
	Email : $Email\n
	Name : $Name\n
	subject : $Subject\n
	Message : $Message\n";

	
	mail($to, $subject, $msg, "From: $_GET[email]");
	echo "<div class='alert alert-success'>Thank you for your message :D</div>";		
	
?>
