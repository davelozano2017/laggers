<?php
include "../../cn.php";




			$stmt2 = $pdo->prepare("update user set st = 'Verified' WHERE fid = :id"); 
									$stmt2->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
									
									$result = $stmt2->execute();
	
	if($result){
		$stmt3 = $pdo->prepare("insert into audit (ugrad_id, action) values (:session_ipid, 'Verified User')"); 
									$stmt3->bindParam(':session_ipid', $_SESSION['session_ipid'], PDO::PARAM_STR);
									$audit = $stmt3->execute();
									echo "<label style='color:green;'>Successfully Updated</label>";
	}



?>