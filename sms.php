<?php 
require 'SmsGateway.php';
// $numbers = [];
//         foreach($contact as $key => $value) {
//           $contacts = $contact[$key];
//           $numbers[] = "+63".$contact[$key];
//         }

    $smsGateway = new SmsGateway('ralph_deborja@yahoo.com', 'ralph123');
    $number  = '+639970797547';
    $message = 'Hello sir';
    $deviceID = 56464;
    $smsGateway->sendMessageToNumber($number, $message, $deviceID);
    if($smsGateway) 
    {
        echo 'successfully sent.';
    }
