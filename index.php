<?php
require_once './autoload.php';
use Twilio\Twiml;


$body = $_REQUEST['Body'];

if( $body == 'hello' ){
    $response->message('Hi!');
}else if( $body == 'bye' ){
    $response->message('Goodbye');
}
echo $response;

?>
