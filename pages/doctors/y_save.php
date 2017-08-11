<?php
session_start();
include "../../cn.php";
   // perform a case-Insensitive search for the word "Vi"
   
if (preg_match("/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})/", $_GET['password'], $match)){

$stmt2 = $pdo->prepare("Insert into doctor values ('',:LN, :FN, :MN, :SN, :GENDER, :YEARS, :SPECIALIZATION, :CN, :email, 3)"); 

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

echo "<label style='color:green;'>Successfully saved</label>";
$stmt = $pdo->prepare("Insert into user (UN,PW,Type,email,st,attempts) values (:username, :password, 'Doctor',:email,'Verified',3)"); 
$stmt->bindParam(':username', $_GET['username'], PDO::PARAM_STR);
$stmt->bindParam(':password', $_GET['password'], PDO::PARAM_STR);
$stmt->bindParam(':email', $_GET['email'], PDO::PARAM_STR);
$result = $stmt->execute();

}


} else {
echo "<label style='color:red;'>Your password must contain atleast one Uppercose, lowercase, number, symbol (@#$%) and minimum of 6 characters</label>";
}


?>