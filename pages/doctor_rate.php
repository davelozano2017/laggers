<?php 

include '../cn.php';
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

if($_POST['action'] == 'rate') {
    $name = $_POST['doctor_name'];
    $specialization = $_POST['specialization'];
    $ratings = $_POST['rate'];
    $ip = get_client_ip();

    $q = $db->query("SELECT * FROM doctor_rating WHERE doctor_name = '$name' AND ip = '$ip'");
    $check = $q->num_rows;
    if($check > 0) {
        echo json_encode(array('success' => false));
    } else {
        $query = $db->query("INSERT INTO doctor_rating 
        (doctor_name,specialization,ratings,ip) VALUES ('$name','$specialization','$ratings','$ip')");
        if($query) { echo json_encode(array('success' => true )); }
    }
}