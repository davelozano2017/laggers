<?php 
session_start();
date_default_timezone_set('Asia/Manila');
include '../cn.php';
include '../class/PHPMailerAutoload.php';

if($_POST['action'] == 'sendpayment') {
    $doctor_email = $_SESSION['session_email'];
    $doctor_name = $_SESSION['session_iname'];
    $patient_email = $_POST['patient_email'];
    $patient_name = $_POST['patient_name'];
    $amount = $_POST['amount'];
    $amt = '&#8369;'.number_format($_POST['amount'],2,'.',',');
    $reference_code = $_POST['reference_code'];
    $date = $regdate = date('F j, \ Y h:i A');
    $query = $db->query("SELECT reference_code FROM payment WHERE reference_code = '$reference_code'");
    if($amount == 0) {
        echo json_encode(array('success' => 'falses'));
    } else if($check = $query->num_rows > 0) {
        echo json_encode(array('success' => false));
    }else {
        $subject = 'Lagger\'s Lane Appointment System - Status';
        $message = 
        "
        Dear $patient_name, <br>
        Thank you for having an appointment with us. Here is the bill that you paid recently $amt
        ";
        $to = $patient_email;
        $headers = "From: Administrator <laggerslane.tk>"."\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $send = mail($to, $subject, $message, $headers);
        if($send) {
            $query = $db->query("INSERT INTO payment
            (patient_name,patient_email,doctor_name,doctor_email,amount,reference_code,date) 
            VALUES 
            ('$patient_name','$patient_email','$doctor_name','$doctor_email','$amount','$reference_code','$date')");
            if($query) {
                echo json_encode(array('success' => true));
            }
        }
    }
}