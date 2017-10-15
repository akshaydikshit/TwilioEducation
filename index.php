<?php
require('/twilio/sdk/Services/Twilio.php');
$response = new Services_Twilio_Twiml;
$response->message("Thanks for the text.")
    print $response;
?>
