<?php
include "../../cn.php";





		$stmt3 = $pdo->prepare("Delete From patient Where id = :id"); 
									$stmt3->bindParam(':id',$_GET['id'], PDO::PARAM_STR);
									$del = $stmt3->execute();
		
		if($del){
			
		$stmt4 = $pdo->prepare("Delete From user Where fid = :id"); 
									$stmt4->bindParam(':id',$_GET['id'], PDO::PARAM_STR);
									$deluser = $stmt4->execute();
		if ($deluser){
			echo "<label style='color:green;'>Successfully Deleted</label>";				
		}						
		
		}
		
					
	
	
?>