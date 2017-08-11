

<?php
session_start();

include "cn.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

	if($_POST){
		
		$sql = "SELECT * From user Where UN = '$username' And PW='$password' AND attempts >= 1";
		if ($res = $pdo->query($sql)) {
			
			  if ($res->rowCount() == 1) {
				  $d = $res->fetch( PDO::FETCH_ASSOC );
				  $id = $d['id'];
				  $user = $d['UN'];
				  $pass = $d['PW'];
				  $cod = $d['fid'];
				  $email = $d['EMAIL'];
				  
				if ($d['Type']=="Administrator") {
					
					$sqlsch = "Select * From employee Where id = '".$cod."'";
					if ($ressch = $pdo->query($sqlsch)) {
			
						if ($ressch->rowCount() == 1) {
							
							$d3 = $ressch->fetch( PDO::FETCH_ASSOC );
							$names = $d3['FN'] .  " " .  $d3['MN'] . " "  . $d3['LN'];	

							$_SESSION['session_ipid'] = $d3['id'];
							$_SESSION['session_i'] = $d['fid'];
							$_SESSION['session_itype']=$d['Type'];
							$_SESSION['session_ipass']=$d['PW'];
							$_SESSION['session_iuser']=$d['fid'];
							$_SESSION['session_iid']=$d['fid'];				
							$_SESSION['session_iname']=$names;
				
							$_SESSION['session_email']= $d3['EMAIL'];
							$_SESSION['session_username']=$d['UN'];
							
							header("Location:main.php");		
						}
						
					}
				
				}else if ($d['Type']=="Patient"){
				
						
					$sqlsch = "Select * From patient Where email = '".$email."'";
					if ($ressch = $pdo->query($sqlsch)) {
			
						if ($ressch->rowCount() == 1) {
							
							$d3 = $ressch->fetch( PDO::FETCH_ASSOC );
							$names = $d3['FN'] .  " " .  $d3['MN'] . " "  . $d3['LN'];	

							$_SESSION['session_ipid'] = $d3['id'];
							$_SESSION['session_i'] = $d['fid'];
							$_SESSION['session_itype']=$d['Type'];
							$_SESSION['session_ipass']=$d['PW'];
							$_SESSION['session_iuser']=$d['fid'];
							$_SESSION['session_iid']=$d['fid'];				
							$_SESSION['session_iname']=$names;
							$_SESSION['session_iaddress']="";
							$_SESSION['session_icontact']="";
							$_SESSION['session_email']= $d3['EMAIL'];
							$_SESSION['session_username']=$d['UN'];
							
							$stmt2 = $pdo->prepare("INSERT into logins (fid) VALUES (:UG)"); 
							$stmt2->bindParam(':UG', $d3['id'], PDO::PARAM_STR);
							$insertedstatus = $stmt2->execute();
							
							header("Location:main.php");		
						}
						
					
					}
					
					
				

				}else if ($d['Type']=="Doctor"){
					
					
								$sqlsch = "Select * From doctor Where EMAIL = '".$email."'";
					if ($ressch = $pdo->query($sqlsch)) {
			
						if ($ressch->rowCount() == 1) {
							
							$d3 = $ressch->fetch( PDO::FETCH_ASSOC );
							$names = $d3['FN'] .  " " .  $d3['MN'] . " "  . $d3['LN'];	

							$_SESSION['session_ipid'] = $d3['id'];
							$_SESSION['session_i'] = $d['fid'];
							$_SESSION['session_itype']=$d['Type'];
							$_SESSION['session_ipass']=$d['PW'];
							$_SESSION['session_iuser']=$d['fid'];
							$_SESSION['session_iid']=$d['fid'];				
							$_SESSION['session_iname']=$names;
							$_SESSION['session_iaddress']="";
							$_SESSION['session_icontact']="";
							$_SESSION['session_email']= $d3['email'];
							$_SESSION['session_username']=$d['UN'];
							$sql = "UPDATE user SET attempts = 3 WHERE email = '".$d3['email']."'";
							$query = $db->query($sql);
							header("Location:main.php");


						}
					}
					
				}
					
				}  else{
		            $sql = "Select * From user Where UN = '$username' OR PW='$password'";
					if ($sql = $pdo->query($sql)) {
						if ($sql->rowCount() == 1) {
							$d3 = $sql->fetch( PDO::FETCH_ASSOC );
							$Type = $d3['Type'];
							$id = $d3['id'];
							$uname = $d3['UN'];
							$pword = $d3['PW'];
							$attempts = $d3['attempts'];
							
							if($attempts == 0) {
								echo "<script type='text/javascript'> ";
				  				echo "alert('Your account has been blocked'); ";
				  				echo "window.location = ('index.php');\n"; 
				  				echo "</script>";	
							}
							elseif($uname != $username && $Type != 'Administrator') {
								$sql = "UPDATE user SET attempts = '$attempts' - 1 WHERE id = $id";
								$query = $db->query($sql);
							} elseif($pword != $password && $Type != 'Administrator') {
								$sql = "UPDATE user SET attempts = '$attempts' - 1 WHERE id = $id";
								$query = $db->query($sql);
							}
						}
					}
			 		echo "<script type='text/javascript'> ";
					echo "alert('Invalid username or password'); ";
					echo "window.location = ('index.php');\n"; 
					echo "</script>";	
	
				}
					
	}}
?>