<?php 
include 'cn.php';
session_start();
$patient_email = $_SESSION['session_email'];
$patient_name = $_SESSION['session_iname'];

if($_POST['action'] == 'submit') {
    $chosentime = date('H:i:s', strtotime($db->real_escape_string($_POST['chosentime'])));
    $hiddenid = $db->real_escape_string($_POST['hiddenid']);
    $day = $db->real_escape_string($_POST['day']);
    $doctor_email = $db->real_escape_string($_POST['doctor_email']);
    $q = $db->query("SELECT * FROM appointment WHERE 
    email = '$doctor_email' AND patient_email = '$patient_email' AND chosentime = '$chosentime' ");
    $count = $q->num_rows;
    if($count >= 3) {
        echo json_encode(array('success' => false, 'message' => 'This time is not available'));
    } else {
        $query = $db->query("INSERT INTO appointment
        (email,chosentime,patient_name,patient_email,status,date) 
        VALUES
        ('$doctor_email','$chosentime','$patient_name','$patient_email',0,'$day')");
        if($query) {
            echo json_encode(array('success' => true, 'message' => 'success'));
        }
    }

} elseif($_POST['action'] == 'approve') {
    $id = $_POST['id'];
    $query = $db->query("UPDATE appointment SET status = 1 WHERE id = $id");
    if($query) {
        echo 'Approved';
    }
} elseif($_POST['action'] == 'decline') {
    $id = $_POST['id'];
    $query = $db->query("UPDATE appointment SET status = 2 WHERE id = $id");
    if($query) {
        echo 'Declined';
    }
} 
