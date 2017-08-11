<?php
include "../../cn.php";





		$stmt3 = $pdo->prepare("Delete From patient Where id = :id"); 
									$stmt3->bindParam(':id',$_GET['id'], PDO::PARAM_STR);
									$del = $stmt3->execute();
		
		if($del){
			echo "<label style='color:green;'>Successfully saved</label>";
		}
		
									
	
	
?>