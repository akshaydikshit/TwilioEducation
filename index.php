<?php
require_once './autoload.php';
use Twilio\Twiml;

$response = new Twiml();
$message = $response->message("Thanks for the text.");

$message->body('Hello Worlddsadsadsadas!');
$response->redirect('https://demo.twilio.com/sms/welcome');

echo $response;


?>
