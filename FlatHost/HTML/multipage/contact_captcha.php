<?
// grab recaptcha library
require_once "recaptchalib.php";

// your secret key
$secret = "6LeR6f4SAAAAAEabHVnddM441ZNdbwWIlrGtzOAM";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);


// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

 if ($response != null && $response->success) {
 
$name  = $_POST["name"];
$email = $_POST["email"];
$mobile   = $_POST["mobile"];
$msg   = $_POST["message"];
 	
$to    = "surjithctly@gmail.com";
if (isset($email) && isset($name) && isset($msg)) {
    $subject = "$name sent you a message via FlatHost";
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Email: $email <br/> Mobile: $mobile <br/>Message: $msg";
	
   $mail =  mail($to, $subject, $msg, $headers);
  if($mail) {
		echo 'success';
		header("Location: contact_captcha.html?contact=success");
	} else	{
		echo 'failed';
		header("Location: contact_captcha.html?contact=error");
	}
}

} else {
		echo 'Captcha failed';
		header("Location: contact_captcha.html?contact=captcha");
}

?>