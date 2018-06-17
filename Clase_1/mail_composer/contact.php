<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

// Servidor de mail
$from = 'Ricardo Vergara Web Page <rvergara@remain-it.com>';


$sendTo = 'Ricardo Vergara Admin <ricardovergarawork@gmail.com>';

// subject of the email
$subject = 'Mail desde la clase';

// form field names and their translations.
// array variable name => Text to appear in the email


// message that will be displayed when everything is OK :)
$messages = [];
try {
    if ($_POST) {
        
        Validator::check($_POST);
        
        $emailText = "Mensaje de " . $_POST['name'] . ' - ' . $_POST['email'] . ' - ' . $_POST['phone'] . "\n=============================\n"
            . $_POST['message'];
        
        
        // All the neccessary headers for the email.
        $headers = array(
            'Content-Type: text/plain; charset="UTF-8";',
            'From: ' . $from,
            'Reply-To: ' . $from,
            'Return-Path: ' . $from,
        );
        
        
        $emailTextHtml = "<h1>You have a new message from your contact form</h1><hr>";
        $emailTextHtml .= "<table>";
        $emailTextHtml .= $emailText;
        
        
        $emailTextHtml .= "</table><hr>";
        $emailTextHtml .= "<p>Have a nice day,<br>Best,<br>Ondrej</p>";
        
        $mail = new PHPMailer;
        
        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($sendToEmail, $sendToName);
        // you can add more addresses by simply adding another line with $mail->addAddress();
        $mail->addReplyTo($from);
        
        $mail->isHTML(true);
        
        $mail->Subject = $subject;
        $mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
        
        
        if (!$mail->send()) {
            throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
        }
        
        
        $messages['ok'] = 'El envio fue todo un exito, la proxima mostralo en ingles, dale?';
    }
    
} catch (\Exception $e) {
    $messages['error'] = $e->getMessage();
}


