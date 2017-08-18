<?php
session_start();
include "../../cn.php";
if (preg_match("/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})/", $_GET['PW'], $match)){
	$sql = "SELECT * FROM user WHERE UN = '".$_GET['UN']."'";
	$query = $pdo->query($sql);
    if($query->fetchColumn() > 0){
		echo "<label style='color:RED;'>Username Already Exist</label>";
	} else {
	$stmt = $pdo->prepare("INSERT into user (UN,PW,Type,SQ1,SQ2,EMAIL,st,attempts) VALUES 
	(:UN, :PW, 'Patient', :SQ1, :SQ2, :email, 'Not Yet Verified',3)"); 
	$stmt->bindParam(':UN', $_GET['UN'], PDO::PARAM_STR);
	$stmt->bindParam(':PW', $_GET['PW'], PDO::PARAM_STR);
	$stmt->bindParam(':SQ1', $_GET['secq1'], PDO::PARAM_STR);
	$stmt->bindParam(':SQ2', $_GET['secq2'], PDO::PARAM_STR);
	$stmt->bindParam(':email', $_GET['EMAIL'], PDO::PARAM_STR);
	$insertedaccounts = $stmt->execute();
	if($insertedaccounts) {
	$stm = $pdo->prepare("insert into patient (LN, FN, MN, SN, GENDER, WEIGHT, HEIGHT, BIRTHDAY, BIRTHPLACE, CIVILSTATUS, NATIONALITY, RELIGION, ADDRESS,CONDOMINIUM,BARANGAY,CITY, BLOOD_TYPE, CONTACT_NUMBER, EMAIL) 
	VALUES (:LAST_NAME, :FIRST_NAME, :MIDDLE_NAME, :SUFFIX_NAME, :SEX, :WEIGHT, :HEIGHT, :BIRTHDAY, :BIRTHPLACE, 
	:CIVILSTATUS, :NATIONALITY, :RELIGION, :ADDRESS, 
	:CONDOMINIUM,:BARANGAY,:CITY,:BLOOD_TYPE, :CONTACT_NUMBER, :EMAIL)"); 
	$stm->bindParam(':LAST_NAME', $_GET['LAST_NAME'], PDO::PARAM_STR);
	$stm->bindParam(':FIRST_NAME', $_GET['FIRST_NAME'], PDO::PARAM_STR);
	$stm->bindParam(':MIDDLE_NAME', $_GET['MIDDLE_NAME'], PDO::PARAM_STR);
	$stm->bindParam(':SUFFIX_NAME', $_GET['SUFFIX_NAME'], PDO::PARAM_STR);
	$stm->bindParam(':SEX', $_GET['SEX'], PDO::PARAM_STR);
	$stm->bindParam(':WEIGHT', $_GET['WEIGHT'], PDO::PARAM_STR);
	$stm->bindParam(':HEIGHT', $_GET['HEIGHT'], PDO::PARAM_STR);
	$stm->bindParam(':BIRTHDAY', $_GET['BIRTHDAY'], PDO::PARAM_STR);
	$stm->bindParam(':BIRTHPLACE', $_GET['BIRTHPLACE'], PDO::PARAM_STR);
	$stm->bindParam(':BLOOD_TYPE', $_GET['BLOODTYPE'], PDO::PARAM_STR);
	$stm->bindParam(':CIVILSTATUS', $_GET['CIVILSTATUS'], PDO::PARAM_STR);
	$stm->bindParam(':NATIONALITY', $_GET['NATIONALITY'], PDO::PARAM_STR);
	$stm->bindParam(':RELIGION', $_GET['RELIGION'], PDO::PARAM_STR);
	$stm->bindParam(':ADDRESS', $_GET['ADDRESS'], PDO::PARAM_STR);
	$stm->bindParam(':CONDOMINIUM', $_GET['condominium'], PDO::PARAM_STR);
	$stm->bindParam(':BARANGAY', $_GET['barangay'], PDO::PARAM_STR);
	$stm->bindParam(':CITY', $_GET['city'], PDO::PARAM_STR);
	$stm->bindParam(':BLOOD_TYPE', $_GET['BLOODTYPE'], PDO::PARAM_STR);
	$stm->bindParam(':CONTACT_NUMBER', $_GET['CONTACT_NUMBER'], PDO::PARAM_STR);
	$stm->bindParam(':EMAIL', $_GET['EMAIL'], PDO::PARAM_STR);
	$insertedugrad = $stm->execute();
	echo "<label style='color:green;'>Successfully created</label>";
	
	}
}

} else {
	echo "<label style='color:RED;'>Your password must contain atleast one Uppercose, lowercase, number, symbol (@#$%) and minimum of 6 characters</label>";
}

$res = null;

$pdo = null;
