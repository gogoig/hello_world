<?php

/*
 * Send Grid Example
 *
 */
 
require '/inc/sendgrid-php/sendgrid-php.php';

$username = '';
$password = '';

$sendgrid = new SendGrid($username, $password);
$email = new SendGrid\Email();
$email
	->addTo('')
	->addBcc('')
	->setFrom('')
	->setSubject('Sendgrid Test')
	->setText('This is test.')
;
// $sendgrid->send($email);

try{
	$sendgrid->send($email);
	echo 'Email sent successfully!';
}catch(\SendGrid\Exception $e){
	echo $e->getCode();
    foreach($e->getErrors() as $er) {
        echo $er;
    }
}
