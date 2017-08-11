<?php
include "../../cn.php";



	$stmt2 = $pdo->prepare("UPDATE doctor SET
	LN = :LN,
	FN = :FN,
	MN = :MN,
	SN = :SN,
	GENDER = :GENDER,
	YEARS = :YEARS,
	SPECIALIZATION = :SPECIALIZATION,
	CN = :CN,
	email = :email
	WHERE id = :id"); 
									$stmt2->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
									$stmt2->bindParam(':LN', $_GET['LN'], PDO::PARAM_STR);
									$stmt2->bindParam(':FN', $_GET['FN'], PDO::PARAM_STR);
									$stmt2->bindParam(':MN', $_GET['MN'], PDO::PARAM_STR);
									$stmt2->bindParam(':SN', $_GET['SN'], PDO::PARAM_STR);
									$stmt2->bindParam(':GENDER', $_GET['GENDER'], PDO::PARAM_STR);
									$stmt2->bindParam(':YEARS', $_GET['YEARS'], PDO::PARAM_STR);
									$stmt2->bindParam(':SPECIALIZATION', $_GET['SPECIALIZATION'], PDO::PARAM_STR);
									$stmt2->bindParam(':CN', $_GET['CN'], PDO::PARAM_STR);
									$stmt2->bindParam(':email', $_GET['email'], PDO::PARAM_STR);
									$result = $stmt2->execute();
	
	if($result){
	
		$query = $db->query("UPDATE user SET attempts = 3 WHERE EMAIL = '".$_GET['email']."'");
		echo "<label style='color:green;'>Successfully saved</label>";
	}



?>