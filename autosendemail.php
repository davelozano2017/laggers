<?php
include 'cn.php';
$query = $db->query("SELECT * FROM appointment WHERE notify = 0 AND status = 1");
while($row = $query->fetch_object()) {
    $datetoday = date('Y-m-d');
    $date = $row->date;
    $email = $row->patient_email;
    $send = mail($email,'test','testmode');
    if($send) {
        echo 'success';
    } else {
        echo 'a';
    }
  
    
}