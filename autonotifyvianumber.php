<?php 
require 'SmsGateway.php';
include 'cn.php';
$today = date('Y-m-d', strtotime('+1 days'));  
$query = $db->query("SELECT * FROM appointment WHERE date = '$today' AND status = 1 AND notify = 0");
foreach($query as $row) {
$number[] = $row['patient_number'];
$date[] = $row['date'];
$now[] = date('Y-m-d');  
$id[] = $row['id'];
} 
$count = count(@$id);
if($count == 0) {
    return false;
} else {
    
    $smsGateway = new SmsGateway('ralph_deborja@yahoo.com', 'ralph123');
    $message = 'Hello sir';
    $deviceID = 57156;
    $smsGateway->sendMessageToNumber($number, $message, $deviceID);
    if($smsGateway) 
    {
        echo 'successfully sent.';
         foreach($id as $userid) {
            $query = $db->query("UPDATE appointment SET notify = 1 WHERE id = '$userid'");
        }
    }
    
}


