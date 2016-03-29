<?php
    /**
    * This example shows making an SMTP connection with authentication.
    */

    //SMTP needs accurate times, and the PHP timezone MUST be set
    //This should be done in your php.ini, but this is how to do it if you don't have access to that
    date_default_timezone_set('Etc/UTC');

    require '/PHPMailer-master/PHPMailerAutoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

    //Set the hostname of the mail server
    $mail->Host = "mail.carolinathink.com";
    //Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 587;
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication
    $mail->Username = "eric@carolinathink.com";
    //Password to use for SMTP authentication
    $mail->Password = "tarheels";
    //Set who the message is to be sent from
    $mail->setFrom('eric@carolinathink.com', 'Eric Peden');
    //Set an alternative reply-to address
    $mail->addReplyTo('eric@carolinathink.com', 'Eric Peden');
    //Set who the message is to be sent to
    $mail->addAddress('ericmpeden@gmail.com', 'Eric TEST');


    // $comments =  $_POST['form_comments']; // required

    //Set the subject line
    $mail->Subject = 'PHPMailer SMTP test';
    //if you want to include text in the body. 
    $mail->Body    = "This is a test of email. PLEASE WORK.";
    // $mail->Body .= "\n" .= $comments

    //send the message, check for errors
    if (!$mail->send()) {
     echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
     echo "Message sent!";
    }
 ?>



 <!-- include your own success html here -->



 Thank you for contacting us. We will be in touch with you very soon.



 <?php

}

?>