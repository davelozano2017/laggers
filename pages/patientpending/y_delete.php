<?php
include "../../cn.php";

		$query = $db->query("SELECT * FROM patient WHERE id = ".$_GET['id']);
		$row = $query->fetch_object();
		$email = $row->EMAIL;
		$stmt3 = $pdo->prepare("Delete From patient Where id = :id"); 
		$stmt3->bindParam(':id',$_GET['id'], PDO::PARAM_STR);
		$del = $stmt3->execute();

		if($del) {
			$delete = $db->query("DELETE FROM user WHERE EMAIL = '$email'");
			if($delete) {
				echo "<label style='color:green;'>Successfully Deleted</label>";
			}
		}

	
		
					
	
	
?>