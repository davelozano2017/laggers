<?php 
$db = new mysqli('localhost','root','','dblaggerslane');

$query = $db->query("SELECT * FROM availability");
foreach($query as $row) {
    $data[] = $row;
}
echo json_encode($data);

