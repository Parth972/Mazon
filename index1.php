<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
$sid    = "ACb307221cfb299d2aae4c1aaf03c348bb";
$token  = "07494a4be8eb25f38fdb9e5095d6be26";
$twilio = new Client($sid, $token);
// $lat=19.10723200252726;
// $lon=72.83742473188745;
// $lat1=(string)$lat;
// $lon1=(string)$lon;

$message = $twilio->messages
                  ->create("+917507371798", // to
                           array(
                               "body" => "Payment Successfull",
                               "from" => "+12673101724"
                           )
                  );

print($message->sid);