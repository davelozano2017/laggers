<?php 
require 'SmsGateway.php';
include 'cn.php';
$today = date('Y-m-d', strtotime('+1 days'));  
$query = $db->query("SELECT * FROM appointment WHERE date = '$today' AND status = 1");
foreach($query as $row) {
$name[] = $row['patient_name'];
$number[] = $row['patient_number'];
$time[] = date('h:i A',strtotime($row['chosentime']));
$date[] = date('M d Y',strtotime($row['date']));
$now[] = date('Y-m-d');  
$id[] = $row['id'];
} 
$count = count(@$id);
if($count == 0) {
    return false;
} else {
    
    $smsGateway = new SmsGateway('ralph_deborja@yahoo.com', 'ralph123');
    $message = "Hello ".implode(' ',$name).", We just want to inform you about your settled appointment ".implode(' ',$date)." ".implode(' ',$time).". Please be early as soon as possible thank you!
    ";
    $deviceID = 61990;
    $smsGateway->sendMessageToNumber($number, $message, $deviceID);
    if($smsGateway) 
    {
        echo 'successfully sent.';
         foreach($id as $userid) {
            $query = $db->query("UPDATE appointment SET notify = 1 WHERE id = '$userid'");
        }
    }
    
}


