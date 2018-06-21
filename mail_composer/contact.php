<?php

$messages = [];

try {
    if ($_POST) {
        
        \App\Helpers\Validator::check($_POST);
        
        $emailText = "Mensaje de " . $_POST['name'] . ' - ' . $_POST['email'] . "\n=============================<br>"
            . $_POST['message'];
        
        $emailTextHtml = "<h1>You have a new message from your contact form</h1><hr>";
        $emailTextHtml .= "<table>";
        $emailTextHtml .= $emailText;
        
        
        $emailTextHtml .= "</table><hr>";
        $emailTextHtml .= "<p>Have a nice day,<br>Best,<br>Ondrej</p>";
        
        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
        
        $mail->setFrom('rvergara@remain-it.com', 'Ricardo Vergara Web Page');
        $mail->addAddress('ricardovergarawork@gmail.com', 'Ricardo Vergara Admin');
        
        $mail->isHTML(true);
        
        $mail->Subject = 'Mensaje desde la clase';
        $mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy
        
        
        if (!$mail->send()) {
            throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
        }
        
        
        $messages['ok'] = 'El envio fue todo un exito, la proxima mostralo en ingles, dale?';
    }
    
} catch (\Exception $e) {
    $messages['error'] = $e->getMessage();
}


