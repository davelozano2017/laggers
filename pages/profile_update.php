<?php
session_start();
include "../cn.php";

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
							,CONDOMINIUM = :CONDOMINIUM
							,BARANGAY = :BARANGAY
							,CITY= :CITY
							,BLOOD_TYPE = :BLOOD_TYPE
							,CONTACT_NUMBER = :CONTACT_NUMBER
							,NATIONALITY = :NATIONALITY
							,RELIGION = :RELIGION
							,EMAIL = :EMAIL
							,CIVILSTATUS = :CIVILSTATUS
							Where id = :id "); 
							
	$stmt2->bindParam(':LAST_NAME', $_GET['LAST_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':FIRST_NAME', $_GET['FIRST_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':MIDDLE_NAME', $_GET['MIDDLE_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':SUFFIX_NAME', $_GET['SUFFIX_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':WEIGHT', $_GET['WEIGHT'], PDO::PARAM_STR);
	$stmt2->bindParam(':HEIGHT', $_GET['HEIGHT'], PDO::PARAM_STR);
	$stmt2->bindParam(':BIRTHDAY', $_GET['BIRTHDAY'], PDO::PARAM_STR);
	$stmt2->bindParam(':ADDRESS', $_GET['ADDRESS'], PDO::PARAM_STR);
	$stmt2->bindParam(':BLOOD_TYPE', $_GET['BLOOD_TYPE'], PDO::PARAM_STR);
	$stmt2->bindParam(':CONTACT_NUMBER', $_GET['CONTACT_NUMBER'], PDO::PARAM_STR);
	$stmt2->bindParam(':EMAIL', $_GET['EMAIL'], PDO::PARAM_STR);
	$stmt2->bindParam(':SEX', $_GET['SEX'], PDO::PARAM_STR);
	
	$stmt2->bindParam(':BIRTHPLACE', $_GET['BIRTHPLACE'], PDO::PARAM_STR);
	$stmt2->bindParam(':NATIONALITY', $_GET['NATIONALITY'], PDO::PARAM_STR);
	$stmt2->bindParam(':RELIGION', $_GET['RELIGION'], PDO::PARAM_STR);
	$stmt2->bindParam(':ADDRESS', $_GET['ADDRESS'], PDO::PARAM_STR);
	$stmt2->bindParam(':CONDOMINIUM', $_GET['CONDOMINIUM'], PDO::PARAM_STR);
	$stmt2->bindParam(':BARANGAY', $_GET['BARANGAY'], PDO::PARAM_STR);
	$stmt2->bindParam(':CITY', $_GET['CITY'], PDO::PARAM_STR);
	$stmt2->bindParam(':CIVILSTATUS', $_GET['CIVIL_STATUS'], PDO::PARAM_STR);
	$stmt2->bindParam(':id', $_SESSION['session_ipid'], PDO::PARAM_STR);
	$insert = $stmt2->execute();

?>