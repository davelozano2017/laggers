<?php
session_start();
include "../cn.php";

$stmt2 = $pdo->prepare("Update doctor Set 
							LN = :LAST_NAME
							,FN = :FIRST_NAME
							,MN = :MIDDLE_NAME
							,SN = :SUFFIX_NAME
							,GENDER = :SEX
							,CN = :CONTACT_NUMBER				
							,email = :EMAIL
							,YEARS = :YEARS
							Where email = '".$_GET['EMAIL']."'"); 
	$stmt2->bindParam(':LAST_NAME', $_GET['LAST_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':FIRST_NAME', $_GET['FIRST_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':MIDDLE_NAME', $_GET['MIDDLE_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':SUFFIX_NAME', $_GET['SUFFIX_NAME'], PDO::PARAM_STR);
	$stmt2->bindParam(':SEX', $_GET['SEX'], PDO::PARAM_STR);
	$stmt2->bindParam(':CONTACT_NUMBER', $_GET['CONTACT_NUMBER'], PDO::PARAM_STR);
	$stmt2->bindParam(':EMAIL', $_GET['EMAIL'], PDO::PARAM_STR);
	$stmt2->bindParam(':YEARS', $_GET['YEARS'], PDO::PARAM_STR);
	$insert = $stmt2->execute();

?>