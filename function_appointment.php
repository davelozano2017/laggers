<?php 
include 'cn.php';
require 'SmsGateway.php';
session_start();
$patient_email = $_SESSION['session_email'];
$patient_name = $_SESSION['session_iname'];
$patient_number = $_SESSION['session_icontact'];
function generateRandomString($length = 10) {
    $characters = 'QWERTYUIOPASDFGHJKLXCVBNMZXCVZBNMFGDHJKSLTYRUEIOWQWEYTIYQWTEPQIUEYQWETYPADGASJFLASJFSDLZXCASDBCBVXNCBAJHASDUYQUW';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
if($_POST['action'] == 'submit') {
    $chosentime     = date('H:i:s',strtotime($db->real_escape_string($_POST['chosentime'])));
    $hiddenid       = $db->real_escape_string($_POST['hiddenid']);
    $day            = $db->real_escape_string($_POST['day']);
    $purpose        = $db->real_escape_string($_POST['purpose']);
    $doctor_email   = $db->real_escape_string($_POST['doctor_email']);
    $reference_code = generateRandomString();
    $q = $db->query("SELECT * FROM appointment WHERE 
    email = '$doctor_email' AND patient_email = '$patient_email' AND chosentime = '$chosentime' AND date = '$day'");
    $count = $q->num_rows;
    if($count > 0) {
        $rows = $q->fetch_object();
        $rowdate = $rows->date;
        $date = date('Y-m-d', strtotime('+3 days'));
        if($count >= 3) {
            echo json_encode(array('success' => false, 'message' => 'This time is not available'));
        } elseif($date == $rowdate){ 
            echo json_encode(array('success' => false, 'message' => 'One at a time'));
        }else {
            echo json_encode(array('success' => false, 'message' => 'One at a time'));
        }
    }
    else {
        $date = date('Y-m-d', strtotime('+3 days'));
        $checkquery = $db->query("SELECT * FROM appointment WHERE patient_email = '$patient_email' AND date = '$date'");
        $checking = $checkquery->num_rows;
        if($checking > 0 ) {
            echo json_encode(array('success' => false, 'message' => 'You can set an appointment once a day'));
        } else {
        $query = $db->query("INSERT INTO appointment
        (email,chosentime,purpose,patient_name,patient_email,patient_number,status,reference_code,date) 
        VALUES
        ('$doctor_email','$chosentime','$purpose','$patient_name','$patient_email','$patient_number',0,'$reference_code','$day')");
        if($query) {
            echo json_encode(array('success' => true, 'message' => 'Appointment has been set. Please wait the doctor for approval.'));
        }
    }
}

} elseif($_POST['action'] == 'approve') {
    $id = $_POST['id'];
    $qq = $db->query("SELECT * FROM appointment WHERE id = '$id'");
    $qcc = $qq->fetch_object();
    $email_doctor = $qcc->email;
    $purpose = $qcc->purpose;
    $patient_name = $qcc->patient_name;
    $patient_number = $qcc->patient_number;
    $date = date('F d, Y',strtotime($qcc->date));
    $time = date('h:i A',strtotime($qcc->chosentime));
    $qccc = $db->query("SELECT * FROM doctor WHERE email = '$email_doctor'");
    $rcc = $qccc->fetch_object();
    $doctor_name = $rcc->FN . ' '. $rcc->MN. ' '.$rcc->LN;

    $patients_email = $_POST['patients_email'];
    $subject = 'Lagger\'s Lane Appointment System - Approved';
    $message = 
    "
    Dear $patient_name, <br>
    
    Your appointment has been approved. Thanks for booking your appointment with us. Here's all the details you need: <br>
    
    When: $date <br>
    Purpose: $purpose <br>
    Practitioner/Doctor: $doctor_name <br>
    
    For any inquiries please contact (number). We are looking forward to seeing you soon!
    ";
    $to = $patients_email;
    $headers = "From: Administrator <laggerslane.tk>"."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $send = mail($to, $subject, $message, $headers);
        if($send) {
            $smsGateway = new SmsGateway('jayceepaganpan@gmail.com', 'blackarrow');
            $message = "Hello $patient_name, We just want to inform you about your settled appointment $date at $time. Please be early as soon as possible thank you!
            ";
            $deviceID = 56284;
            $number = '+63'.$patient_number;
            $smsGateway->sendMessageToNumber($number, $message, $deviceID);
            if($smsGateway) {
                $query = $db->query("UPDATE appointment SET status = 1 WHERE id = $id");
                echo 'Approved';
            }
        } 
    }elseif($_POST['action'] == 'decline') {
    $id = $_POST['id'];
    $q = $db->query("SELECT * FROM appointment WHERE id = '$id'");
    $ro = $q->fetch_object();
    $roemail = $ro->patient_email;
    $roname = $ro->patient_name;
    $query = $db->query("UPDATE appointment SET status = 2 WHERE id = '$id'");
    if($query) {
    $subject = 'Lagger\'s Lane Appointment System - Declined';
    $message = 
    "
    Dear $roname,<br>
    We regret to inform you that your appointment has been declined. 
    For any questions, please contact (number).
    ";
    $to = $roemail;
    $headers = "From: Administrator <laggerslane.tk>"."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $send = mail($to, $subject, $message, $headers);
    }

} elseif($_POST['action'] == 'approve cancellation') {
    $id = $_POST['id'];
    $email = $_POST['patient_email'];
    $subject = 'Lagger\'s Lane Appointment System - Appointment Cancellation';
    $message = "<b>your appointment has been cancelled.</b >";
    $to = $email;
    $headers = "From: Administrator <laggerslane.tk>"."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $send = mail($to, $subject, $message, $headers);
        if($send) {
            $query = $db->query("DELETE  FROM appointment WHERE id = $id");
        } 
    }

