<?php
require_once './autoload.php';
use Twilio\Twiml;

$body = $_REQUEST['Body'];
if( $body == 'hello' ){
$response = new Twiml();
$message = $response->message("Thanks for the text.");
}else if( $body == 'bye' ){
$message->body('Hello Worlddsadsadsadas!');
}

$response->redirect('https://demo.twilio.com/sms/welcome');

echo $response;


?>
