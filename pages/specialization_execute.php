<?php
include "../cn.php";
switch($_GET['action']) {

    case 'update':
    $stmt2 = $pdo->prepare("UPDATE specialization SET specialization = :specialization WHERE id = :id"); 
    $stmt2->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
    $stmt2->bindParam(':specialization', $_GET['specialization'], PDO::PARAM_STR);
    $result = $stmt2->execute();
    break;

    case 'add':
	$stmt2 = $pdo->prepare("Insert into specialization values (0, :specialization)"); 
    $stmt2->bindParam(':specialization', $_GET['specialization'], PDO::PARAM_STR);
    $result = $stmt2->execute();
	if($result){
    echo "<label style='color:green;'>Successfully saved</label>";
	}

}
