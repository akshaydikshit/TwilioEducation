<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;

$response = new Twiml();
$message = $response->message();
$message->body('Hello Worlddsadsadsadas!');
$response->redirect('https://demo.twilio.com/sms/welcome');

echo $response;


?>
