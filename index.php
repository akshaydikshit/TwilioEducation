<?php
require_once './autoload.php';
use Twilio\Twiml;

$body = $_REQUEST['Body'];
$from = $_REQUEST['From'];

if( ($from == '+19292402278') && (stripos($body, '10/10/2017' )!== FALSE) && (stripos($body, 'attendance' )!== FALSE)){
 $response = new Twiml();
$message = $response->message("Your ward was Present on this date.");
}

else if( $body == 'bye' ){

  $response = new Twiml();
$message = $response->message("GoodBye!");
}


echo $response;


?>
