<?php 
include 'cn.php';
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
    $chosentime = date('H:i:s', strtotime($db->real_escape_string($_POST['chosentime'])));
    $hiddenid = $db->real_escape_string($_POST['hiddenid']);
    $day = $db->real_escape_string($_POST['day']);
    $purpose = $db->real_escape_string($_POST['purpose']);
    $doctor_email = $db->real_escape_string($_POST['doctor_email']);
    $reference_code = generateRandomString();
    $date = date('Y-m-d');
    $q = $db->query("SELECT * FROM appointment WHERE 
    email = '$doctor_email' AND patient_email = '$patient_email' AND chosentime = '$chosentime' ");
    $count = $q->num_rows;
    if($count >= 3) {
        echo json_encode(array('success' => false, 'message' => 'This time is not available'));
    } else {
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
            echo json_encode(array('success' => true, 'message' => 'success'));
        }
    }
}

} elseif($_POST['action'] == 'approve') {
    $id = $_POST['id'];
    $patients_email = $_POST['patients_email'];
    $subject = 'Lagger\'s Lane Appointment System - Forgot Password';
    $message = "<b>your appointment has been approved.</b>";
    $to = $patients_email;
    $headers = "From: Administrator <laggerslane.tk>"."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $send = mail($to, $subject, $message, $headers);
        if($send) {
            $query = $db->query("UPDATE appointment SET status = 1 WHERE id = $id");
            echo 'Approved';
        } 
    }elseif($_POST['action'] == 'decline') {
    $id = $_POST['id'];
    $query = $db->query("UPDATE appointment SET status = 2 WHERE id = $id");
    if($query) {
        echo 'Declined';
    }
} elseif($_POST['action'] == 'approve cancellation') {
    $id = $_POST['id'];
    $email = $_POST['patient_email'];
    $subject = 'Lagger\'s Lane Appointment System - Appointment Cancellation';
    $message = "<b>your appointment has been cancelled.</b>";
    $to = $email;
    $headers = "From: Administrator <laggerslane.tk>"."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $send = mail($to, $subject, $message, $headers);
        if($send) {
            $query = $db->query("DELETE  FROM appointment WHERE id = $id");
        } 
    }

