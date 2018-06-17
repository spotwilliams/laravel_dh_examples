<?php

$from     = 'Ricardo Vergara Web Page <rvergara@remain-it.com>';
$sendTo   = 'Ricardo Vergara Admin <ricardovergarawork@gmail.com>';
$subject  = 'Mail desde la clase';
$messages = [];
try {
    if ($_POST) {
        
        \App\Helpers\Validator::check($_POST);
        
        $emailText = "Mensaje de " . $_POST['name'] . ' - ' . $_POST['email'] .  "\n=============================\n"
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


