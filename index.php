SDK Version: 5.x
<?php
require_once './autoload.php';
use Twilio\Twiml;

$response = new Twiml();
$message = $response->message();

$body = $_REQUEST['Body'];
if( $body == 'hello' ){
    $response->message('Hi!');
}else if( $body == 'bye' ){
    $response->message('Goodbye');
}

echo $response;



?>
