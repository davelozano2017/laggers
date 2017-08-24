<?php
session_start();
include "../function/enc.php";
include "../cn.php";
$username = $_GET['un'];
$newpass = $_GET['new'];
$oldpass = $_GET['old'];
$query = $db->query("SELECT * FROM user WHERE UN = '$username'");
$row = $query->fetch_object();
$UN = $row->UN;
$old = $row->PW; 
$id = $row->id;

if($old != $oldpass) {
echo "<label style='color:red;'>Old password is incorrect</label>";
} else {

	$stmt2 = $pdo->prepare("Update user Set PW = :pass, UN = :un Where id = :id"); 						
	$stmt2->bindParam(':pass', $newpass, PDO::PARAM_STR);
	$stmt2->bindParam(':un', $username, PDO::PARAM_STR);
	$stmt2->bindParam(':id', $id, PDO::PARAM_STR);
	$insert = $stmt2->execute();
	if($insert){
		echo "<label style='color:green;'>Password successfully saved</label>";
	}
}

