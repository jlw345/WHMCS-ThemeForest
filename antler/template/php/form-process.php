<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$department = $_POST["department"];
$message = $_POST["message"];
 
$EmailTo = "yourmail@antler.com";
$Subject = "New Message Received";
 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Subject: ";
$Body .= $subject;
$Body .= "\n";

$Body .= "Department: ";
$Body .= $department;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>