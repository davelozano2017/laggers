<?php 
include "../cn.php";
if($_POST['action'] == 'cancellation') {
    $id = $_POST['id'];

    $query = $db->query("UPDATE appointment SET status = 5 WHERE id = $id");
    if($query) {
        echo json_encode(array('success' => true));
    }
}