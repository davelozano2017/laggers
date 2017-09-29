<?php 
include 'cn.php';
$time = date('h:i:s',strtotime($_POST['time']));
$email = $_POST['email'];

$query = $db->query("SELECT * FROM appointment WHERE email = '$email' AND chosentime = '$time'");
$check = $query->num_rows;
$remaining = 3;
$remaining_slot = $remaining - $check;
echo json_encode(array(
    'success' => true,
    'remaining_slots' => $remaining_slot
));
