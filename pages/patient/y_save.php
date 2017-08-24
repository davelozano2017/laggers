<?php
session_start();
include "../../cn.php";


	$stm = $pdo->prepare("insert into patient (id, LN, FN, MN, SN, GENDER, WEIGHT, HEIGHT, BIRTHDAY, BIRTHPLACE, CIVILSTATUS, NATIONALITY, RELIGION, ADDRESS, CONDOMINIUM, BARANGAY, CITY, BLOOD_TYPE, CONTACT_NUMBER, EMAIL) 
	VALUES (:UG,
	:LAST_NAME,
	:FIRST_NAME, 
	:MIDDLE_NAME, 
	:SUFFIX_NAME, 
	:SEX, 
	:WEIGHT, 
	:HEIGHT, 
	:BIRTHDAY, 
	:BIRTHPLACE, 
	:CIVILSTATUS, 
	:NATIONALITY, 
	:RELIGION, 
	:ADDRESS, 
	:CONDOMINIUM, 
	:BARANGAY, 
	:CITY, 
	:BLOOD_TYPE, 
	:CONTACT_NUMBER, 
	:EMAIL)"); 
	
	$ln = strtoupper($_GET['LN']);
	$fn = strtoupper($_GET['FN']) ;
	$mn = strtoupper($_GET['MN']) ;
	$bday = $_GET['BIRTHDAY'];

	$uid = $ln . $fn . $mn . '-' . $bday . '-';
	
	
	$stm->bindParam(':UG', $uid, PDO::PARAM_STR);
	$stm->bindParam(':LAST_NAME', $_GET['LN'], PDO::PARAM_STR);
	$stm->bindParam(':FIRST_NAME', $_GET['FN'], PDO::PARAM_STR);
	$stm->bindParam(':MIDDLE_NAME', $_GET['MN'], PDO::PARAM_STR);
	$stm->bindParam(':SUFFIX_NAME', $_GET['SN'], PDO::PARAM_STR);
	$stm->bindParam(':SEX', $_GET['GENDER'], PDO::PARAM_STR);
	$stm->bindParam(':WEIGHT', $_GET['WEIGHT'], PDO::PARAM_STR);
	$stm->bindParam(':HEIGHT', $_GET['HEIGHT'], PDO::PARAM_STR);
	$stm->bindParam(':BIRTHDAY', $_GET['BIRTHDAY'], PDO::PARAM_STR);
	$stm->bindParam(':BIRTHPLACE', $_GET['BIRTHPLACE'], PDO::PARAM_STR);
	$stm->bindParam(':BLOOD_TYPE', $_GET['BLOODTYPE'], PDO::PARAM_STR);
	$stm->bindParam(':CIVILSTATUS', $_GET['CIVILSTATUS'], PDO::PARAM_STR);
	$stm->bindParam(':NATIONALITY', $_GET['NATIONALITY'], PDO::PARAM_STR);
	$stm->bindParam(':RELIGION', $_GET['RELIGION'], PDO::PARAM_STR);
	$stm->bindParam(':ADDRESS', $_GET['ADDRESS'], PDO::PARAM_STR);
	$stm->bindParam(':CONDOMINIUM', $_GET['CONDOMINIUM'], PDO::PARAM_STR);
	$stm->bindParam(':BARANGAY', $_GET['BARANGAY'], PDO::PARAM_STR);
	$stm->bindParam(':CITY', $_GET['CITY'], PDO::PARAM_STR);
	$stm->bindParam(':BLOOD_TYPE', $_GET['BLOOD_TYPE'], PDO::PARAM_STR);
	$stm->bindParam(':CONTACT_NUMBER', $_GET['CONTACT_NUMBER'], PDO::PARAM_STR);
	$stm->bindParam(':EMAIL', $_GET['EMAIL'], PDO::PARAM_STR);
	
	
    $insertedugrad = $stm->execute();
	$username = rand(111111,999999);
	if($insertedugrad){
		$query = $db->query("INSERT INTO user
		(UN,PW,Type,EMAIL,st,attempts) VALUES 
		('$username',12345,'Patient','".$_GET['EMAIL']."','Not Yet Verified',3)");
		echo "<label style='color:green;'>Successfully saved</label>";
	}
	
?>