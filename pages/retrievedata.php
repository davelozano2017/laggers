<?php 
session_start();
include '../cn.php';

if($_POST['action'] == 'sendpayment') {
    $id = $_POST['id'];
    $query = $db->query("SELECT * FROM appointment WHERE id = $id");
    $row = $query->fetch_object();
    $id = $row->id;
    $patient_name = $row->patient_name;
    $patient_email = $row->patient_email;
    $purpose = $row->purpose;
    $reference_code = $row->reference_code;
    echo json_encode(array(
        'success' => true, 'patient_name' => $patient_name, 'id' => $id,
        'patient_email' => $patient_email, 'purpose' => $purpose,
        'reference_code' => $reference_code
    ));
}