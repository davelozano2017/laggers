<?php
session_start();
include "../function/enc.php";
include "../cn.php";



if($_SESSION['session_ipass'] == $_GET['old']){
	$un = $_GET['un'];
	$pass = $_GET['new'];
	
	#$pass = encryptRJ256($ky, $iv, $_GET['new']);

	if($_SESSION['session_username']== $un){
		
		$stmt2 = $pdo->prepare("Update user Set PW = :pass, UN = :un Where fid = :session_iuser"); 						
		$stmt2->bindParam(':pass', $pass, PDO::PARAM_STR);
		$stmt2->bindParam(':un', $un, PDO::PARAM_STR);
		$stmt2->bindParam(':session_iuser', $_SESSION['session_iuser'], PDO::PARAM_STR);
		$insert = $stmt2->execute();
		if($insert){
			$_SESSION['session_ipass'] = $pass;
			echo "<label style='color:green;'>Password successfully saved</label>";
		}
		
	}else{
		
		$sql = "Select * From user Where UN = '".$_GET['un']."'";
		if ($res = $pdo->query($sql)) { 
			
			  if ($res->rowCount() > 0) {
				 
				  echo "<label style='color:red;'>Username Already Exist!</label>";
			  }else{
				  
				$stmt3 = $pdo->prepare("Update user Set PW = :pass, UN = :un Where fid = :session_iuser"); 						
				$stmt3->bindParam(':pass', $pass, PDO::PARAM_STR);
				$stmt3->bindParam(':un', $un, PDO::PARAM_STR);
				$stmt3->bindParam(':session_iuser', $_SESSION['session_iuser'], PDO::PARAM_STR);
				$insertaccount = $stmt3->execute();
				if($insertaccount){
						$_SESSION['session_ipass'] = $pass;
						echo "<label style='color:green;'>Password successfully saved</label>";
				}
				  
				  
			  }
		
		
		}
		
		
	}
	
	
	
	
}else{
	echo "<label style='color:red;'>Old password is incorrect!</label>";
}

?>