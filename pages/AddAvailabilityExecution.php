<?php 
session_start();
include '../cn.php';
switch($_POST['action']) {

    case 'add':
    $email = $_SESSION['session_email'];
    $title = 'Dr. '.$_SESSION['session_iname'];
    $day = $db->real_escape_string($_POST['day']);

    $from = date('g A', strtotime($db->real_escape_string($_POST['from'])));
    $to   = date('g A', strtotime($db->real_escape_string($_POST['to'])));

    $start = $day.'T'.date('h:i:s', strtotime($db->real_escape_string($_POST['from'])));
    $end = $day.'T'.date('H:i:s', strtotime($db->real_escape_string($_POST['to'])));

    $base_from = date('H:i:s', strtotime($db->real_escape_string($_POST['from'])));
    $base_to = date('H:i:s', strtotime($db->real_escape_string($_POST['to'])));
    

    $query = $db->query("INSERT INTO availability 
    (title,day,time_from,time_to,start,end,email,time_base_from,time_base_to) 
    VALUES 
    ('$title','$day','$from','$to','$start','$end','$email','$base_from','$base_to')");

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
           