<?php
include "../../cn.php";



$stmt2 = $pdo->prepare("Update patient Set 
							LN = :LAST_NAME
							,FN = :FIRST_NAME
							,MN = :MIDDLE_NAME
							,SN = :SUFFIX_NAME
							,GENDER = :SEX
							,WEIGHT = :WEIGHT
							,HEIGHT = :HEIGHT
							,BIRTHDAY = :BIRTHDAY
							,BIRTHPLACE = :BIRTHPLACE
							,ADDRESS = :ADDRESS
							,BLOOD_TYPE = :BLOOD_TYPE
							,CONTACT_NUMBER = :CONTACT_NUMBER
							,NATIONALITY = :NATIONALITY
							,ZIPCODE = :ZIPCODE
							,RELIGION = :RELIGION
							,EMAIL = :EMAIL
							,CIVILSTATUS = :CIVILSTATUS
							Where ID = :id "); 
							
	$stmt2->bindParam(':LAST_NAME', $_GET['LN'], PDO::PARAM_STR);
	$stmt2->bindParam(':FIRST_NAME', $_GET['FN'], PDO::PARAM_STR);
	$stmt2->bindParam(':MIDDLE_NAME', $_GET['MN'], PDO::PARAM_STR);
	$stmt2->bindParam(':SUFFIX_NAME', $_GET['SN'], PDO::PARAM_STR);
	$stmt2->bindParam(':WEIGHT', $_GET['WEIGHT'], PDO::PARAM_STR);
	$stmt2->bindParam(':HEIGHT', $_GET['HEIGHT'], PDO::PARAM_STR);
	$stmt2->bindParam(':BIRTHDAY', $_GET['BIRTHDAY'], PDO::PARAM_STR);
	$stmt2->bindParam(':ADDRESS', $_GET['ADDRESS'], PDO::PARAM_STR);
	$stmt2->bindParam(':BLOOD_TYPE', $_GET['BLOOD_TYPE'], PDO::PARAM_STR);
	$stmt2->bindParam(':CONTACT_NUMBER', $_GET['CONTACT_NUMBER'], PDO::PARAM_STR);
	$stmt2->bindParam(':EMAIL', $_GET['EMAIL'], PDO::PARAM_STR);
	$stmt2->bindParam(':SEX', $_GET['GENDER'], PDO::PARAM_STR);
	
	$stmt2->bindParam(':BIRTHPLACE', $_GET['BIRTHPLACE'], PDO::PARAM_STR);
	$stmt2->bindParam(':NATIONALITY', $_GET['NATIONALITY'], PDO::PARAM_STR);
	$stmt2->bindParam(':ZIPCODE', $_GET['ZIPCODE'], PDO::PARAM_STR);
	$stmt2->bindParam(':RELIGION', $_GET['RELIGION'], PDO::PARAM_STR);
	$stmt2->bindParam(':ADDRESS', $_GET['ADDRESS'], PDO::PARAM_STR);
	$stmt2->bindParam(':CIVILSTATUS', $_GET['CIVILSTATUS'], PDO::PARAM_STR);
	$stmt2->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
	$insert = $stmt2->execute();
	
	if($insert){
				$query = $db->query("UPDATE user SET attempts = 3 WHERE EMAIL = '".$_GET['EMAIL']."'");

	 echo "<label style='color:green;'>Successfully saved</label>";
	}



?>