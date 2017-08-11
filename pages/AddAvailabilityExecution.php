<?php 
session_start();
include '../cn.php';
switch($_POST['action']) {

    case 'add':
    $email = $_SESSION['session_email'];
    $title = 'Dr. '.$_SESSION['session_iname'];
    $day = $db->real_escape_string($_POST['day']);
    $from = date('h:i:s A', strtotime($db->real_escape_string($_POST['from'])));;
    $to   = date('h:i:s A', strtotime($db->real_escape_string($_POST['to'])));;
    $start = $day.'T'.$_POST['from'].':00';
    $end = $day.'T'.$_POST['to'].':00';
    $query = $db->query("INSERT INTO availability 
    (title,day,time_from,time_to,start,end,email) 
    VALUES 
    ('$title','$day','$from','$to','$start','$end','$email')");

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
           
