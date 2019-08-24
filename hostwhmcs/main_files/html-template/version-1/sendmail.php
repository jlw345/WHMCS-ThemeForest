<?php

    $site_owners_email = 'example@example.com'; // Replace this with your own email address
    $site_owners_name = 'Example'; // replace with your name

    $name = filter_var($_POST['contactName'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['contactEmail'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['contactSubject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['contactMessage'], FILTER_SANITIZE_STRING);
    
    $error = "";

    if (strlen($name) < 2) {
        $error['name'] = "Please enter your name.";
    }

    if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
        $error['email'] = "Please enter a valid email address";
    }

    if (strlen($subject) < 2) {
        $error['subject'] = "Please enter a subject.";
    }

    if (strlen($message) < 2) {
        $error['message'] = "Please leave a comment.";
    }

    if (!$error) {

        require_once('phpmailer/class.phpmailer.php');
        $mail = new PHPMailer();

        $mail->From = $email;
        $mail->FromName = $name;
        $mail->Subject = $subject;
        
        $mail->AddAddress($site_owners_email, $site_owners_name);
        $mail->IsHTML(true);
        $mail->Body = '<b>Sender Name:</b> '. $name .'<br/><b>Sender E-mail:</b> '. $email . '<br/><br/><b>Sender Message:</b><br/>' . $message;

        $mail->Send();

        echo "<div class='alert alert-success' role='alert'>Thanks " . $name . ". Your message has been sent.</div>";

    } # end if no error
    else {

        $response = (isset($error['name'])) ? "<div class='alert alert-danger'  role='alert'>" . $error['name'] . "</div> \n" : null;
        $response .= (isset($error['email'])) ? "<div class='alert alert-danger'  role='alert'>" . $error['email'] . "</div> \n" : null;
        $response .= (isset($error['subject'])) ? "<div class='alert alert-danger'  role='alert'>" . $error['subject'] . "</div>" : null;
        $response .= (isset($error['message'])) ? "<div class='alert alert-danger'  role='alert'>" . $error['message'] . "</div>" : null;

        echo $response;
    } # end if there was an error sending

?>
