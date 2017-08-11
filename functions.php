<?php 
include 'cn.php';

$query = $db->query("SELECT * FROM availability INNER JOIN doctor ON doctor.email = availability.email");
foreach($query as $row) {
    $data[] = $row;
}
echo json_encode($data);

