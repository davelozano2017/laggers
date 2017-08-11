<?php
session_start();
include "../cn.php";



$stmt2 = $pdo->prepare("Update employee Set 
							LN = :LAST_NAME
							,FN = :FIRST_NAME
							,MN = :MIDDLE_NAME
							,SN = :SUFFIX_NAME
							,POSITION = :POSITION
							,DEPARTMENT = :DEPARTMENT
							,CN = :Contact_Number
							,EMAIL = :EMAIL
							Where id = :session_iid "); 
							
	$stmt2->bindParam(':LAST_NAME', $_GET['LAST_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':FIRST_NAME', $_GET['FIRST_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':MIDDLE_NAME', $_GET['MIDDLE_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':POSITION', $_GET['Designation'], PDO::PARAM_STR);
	$stmt2->bindParam(':DEPARTMENT', $_GET['DEPARTMENT'], PDO::PARAM_STR);
	$stmt2->bindParam(':SUFFIX_NAME', $_GET['SUFFIX_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':Contact_Number', $_GET['Contact_Number'], PDO::PARAM_STR);
	$stmt2->bindParam(':EMAIL', $_GET['EMAIL'], PDO::PARAM_STR);
	$stmt2->bindParam(':session_iid', $_SESSION['session_iid'], PDO::PARAM_STR);
	$insert = $stmt2->execute();
	
	
	if($insert){
		echo "<label style='color:green;'>Successfully Updated!</label>";
	}
?>