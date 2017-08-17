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
    $reference_code = $_POST['reference_code'];
    $date = $regdate = date('F j, \ Y h:i A');
    $query = $db->query("SELECT reference_code FROM payment WHERE reference_code = '$reference_code'");
    if($amount == 0) {
        echo json_encode(array('success' => 'falses'));
    } else if($check = $query->num_rows > 0) {
        echo json_encode(array('success' => false));
    }else {
        
        $send = mail($patient_email, 'Lagger\'s Lane Appointment System - Status', 
        'Message para sa pag inform na nasend na sa kanya yung  payment niya kong mag kano etc etc.',
        "To: '$patient_name' <$patient_email>n" .
        "From: Administrator <laggerslane.tk>n" .
        "X-Mailer: PHP 4.x");
        if($send) {
            $query = $db->query("INSERT INTO payment
            (patient_name,patient_email,doctor_name,doctor_email,amount,reference_code,date) 
            VALUES 
            ('$patient_name','$patient_email','$doctor_name','$doctor_email','$amount','$reference_code','$date')");
            if($query) {
                echo json_encode(array('success' => true));
            }
        }

        // $mailer = new PHPMailer();
        // // $mailer->IsSMTP();
        // $mailer->Host = 'smtp.gmail.com:465'; 
        // $mailer->SMTPAuth = TRUE;
        // $mailer->Port = 465;
        // $mailer->mailer="smtp";
        // $mailer->SMTPSecure = 'ssl'; 
        // $mailer->IsHTML(true);
        // $mailer->SMTPOptions = array('ssl' => array(
        //                         'verify_peer' => false, 
        //                         'verify_peer_name' => false, 
        //                         'allow_self_signed' => true)
        //                         );
        // $mailer->Username = 'metrocakeshop@gmail.com';
        // $mailer->Password = 'password!@#$';
        // $mailer->From = 'admin@noreply.com'; 
        // $mailer->FromName = 'admin@laggerslane.tk';
        // $mailer->Body =  'Message para sa pag inform na nasend na sa kanya yung  payment niya kong mag kano etc etc.';
        // $mailer->Subject = 'Lagger\'s Lane Appointment System - Status';
        // $mailer->AddAddress($patient_email);
        // if(!$mailer->send()) {
        // echo 'Message could not be sent.';
        // } else {
        
    // }
    }
}