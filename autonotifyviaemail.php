<?php 
include 'cn.php';
$today = date('Y-m-d', strtotime('+3 days'));     

$query = $db->query("SELECT * FROM appointment WHERE date = '$today' AND status = 1 AND notify = 0");
foreach($query as $row) {
$email[] = $row['patient_email'];
$date[] = $row['date'];
$now[] = date('Y-m-d');  
$id[] = $row['id'];
} 
$count = count(@$id);
if($count == 0) {
    return false;
} else {
    $mail = mail(implode(', ',$email),'auto response','this is auto response email','From: mail@laggerslane.tk');
    if($mail) {
        foreach($id as $userid) {
            $query = $db->query("UPDATE appointment SET notify = 1 WHERE id = '$userid'");
        }
    }
    
}
