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
        
        // Send email - PHP native function
        mail($sendTo, $subject, $emailText, implode("\n", $headers));
        
        $messages['ok'] = 'El envio fue todo un exito, la proxima mostralo en ingles, dale?';
    }
    
} catch (\Exception $e) {
    $messages['error'] = $e->getMessage();
}


