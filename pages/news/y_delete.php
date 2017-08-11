<?php
include "../../cn.php";




$stmt2 = $pdo->prepare("Delete From news Where id = :id"); 
$stmt2->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
$q = $stmt2->execute();
if($q){
	echo "<label style='color:green;'>Successfully deleted</label>";
}
?>