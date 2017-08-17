<?php 
include '../cn.php';
include '../class/PHPMailerAutoload.php';

if($_POST['action'] == 'declined') {
    $id = $_POST['id'];
    $query = $db->query("SELECT patient_email FROM appointment WHERE id = $id");
    foreach($query as $row) {
        $email = $row['patient_email'];
    }
    
    $subject = 'Lagger\'s Lane Appointment System - Status';
    $message = 'Declined';
    $send = mail($email, $subject, $message,
        "To: '$patient_name' <$patient_email>n" .
        "From: Administrator <laggerslane.tk>n" .
        "X-Mailer: PHP 4.x");
    if($send) {
       
            echo json_encode(array('success' => true));
        
    }
    // $mailer = new PHPMailer();
    // $mailer->IsSMTP();
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
    // $mailer->Body =  'Declined';
    // $mailer->Subject = 'Lagger\'s Lane Appointment System - Status';
    // $mailer->AddAddress($email);
    // if(!$mailer->send()) {
    // echo 'Message could not be sent.';
    // echo 'Mailer Error: ' . $mailer->ErrorInfo;
    // } else {
    // echo 'Successfully Sent';
    // }
}