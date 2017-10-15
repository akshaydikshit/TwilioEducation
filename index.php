<?php
require_once './autoload.php';
use Twilio\Twiml;

$body = $_REQUEST['Body'];

if( $body == 'hello' ){

  $response = new Twiml();
$message = $response->message("Thanks for the text.");
}

else if( $body == 'bye' ){

  $response = new Twiml();
$message = $response->message("GoodBye!");
}


echo $response;


?>
