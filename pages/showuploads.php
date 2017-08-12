<?php
session_start();
include '../cn.php';
    $email = $_SESSION['session_email'];
	if(!empty($_FILES)) {
    $tempFile = $_FILES['file']['tmp_name'];          //3             
    $filename = $db->real_escape_string($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/" . $_FILES["file"]["name"]);
    $query = $db->query("INSERT INTO doctor_upload (email,filename) VALUES ('$email','$filename')");
}
?> 

