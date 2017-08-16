<?php 
include 'cn.php';
if($_POST['action'] == 'search') {
    $specialzation = $_POST['specialization'];
    $query = $db->query("SELECT * FROM availability INNER JOIN doctor 
    ON doctor.email = availability.email WHERE doctor.SPECIALIZATION = '$specialzation'");
    $check = $query->num_rows;
    if($check > 0) {
        foreach($query as $row) {
            $data[] = $row;
        }
        echo json_encode($data);
    } else {
        return false;
    }
}