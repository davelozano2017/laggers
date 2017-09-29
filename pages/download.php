<?php
ob_start();
include '../cn.php';
$id = $_GET['id'];
$query = $db->query("SELECT * FROM doctor_upload WHERE id = '$id'");
$row = $query->fetch_object();
$filename = $row->filename;
    $files = urlencode($filename);
    $file = urldecode($files); // Decode URL-encoded string
    $filepath = "../uploads/" . $file;
    // Process download
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    }
?>