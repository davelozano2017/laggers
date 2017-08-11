<?php 
session_start();
include '../cn.php';
switch($_POST['action']) {

    case 'add':
    $email = $_SESSION['session_email'];
    $name = $_SESSION['session_iname'];
    $day = $db->real_escape_string($_POST['day']);
    $from = $db->real_escape_string($_POST['from']);
    $to = $db->real_escape_string($_POST['to']);
    $query = $db->query("INSERT INTO availability 
    (name,day,time_from,time_to,email) 
    VALUES 
    ('$name','$day','$from','$to','$email')");

    if($query) {
        echo 'Successfully saved';
    }
    break;

    case 'delete':
    $id = $_POST['id'];
    $query = $db->query("DELETE FROM availability WHERE id = $id");
    if($query) {
        echo 'Successfully deleted';
    }
    break;
}