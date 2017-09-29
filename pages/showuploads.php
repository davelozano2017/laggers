<?php
session_start();
include '../cn.php';
$email = $_SESSION['session_email'];
$name = $_POST['name'];
$patient_email = $_POST['email'];
$findings = $_POST['findings'];
$reference_code = $_POST['reference_code'];
$date = date('m-d-Y');
if(!empty($_FILES)) {
    $tempFile = $_FILES['file']['tmp_name'];          //3             
    $filename = $db->real_escape_string($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["file"]["name"]);
    $query = $db->query("INSERT INTO doctor_upload 
    (email,patient_name,patient_email,filename,reference_code,findings,date) VALUES ('$email','$name','$patient_email','$filename','$reference_code','$findings','$date')");

} else {
    $query = $db->query("INSERT INTO doctor_upload 
    (email,patient_name,patient_email,reference_code,findings,date) 
    VALUES ('$email','$name','$patient_email','$reference_code','$findings','$date')");
    if($query) {
        echo '<script>alert("successfully saved.");location.href="../my_uploads.php"</script>';
    }
}

