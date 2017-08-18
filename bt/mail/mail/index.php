<?php
session_start();
include "../../../cn.php";
	$un = $_GET['UN'];
	$sq1 = $_GET['Security_Question_Answer'];
	$sq2 = $_GET['Security_Question_Answer_2'];
	

$sql = "SELECT * FROM user WHERE UN = '$un' AND SQ1 = '$sq1' AND SQ2 = '$sq2'";
if ($res = $pdo->query($sql)) {
	

   
  if ($res->rowCount() > 0) {
	$result = $res->fetch( PDO::FETCH_ASSOC );
	


		  $email = $result['EMAIL'];
		  $id = $result['id'];

     $newpass= rand_strings(10);	
					/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';
		
			$subject = 'Lagger\'s Lane Appointment System - Forgot Password';
			$message = "<html>
                <head>
                  <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
                  <title>Laggers Lane Account Password Reset</title>
                </head>
                <body>
                
                <div style='width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;'>
                  <div align='center'>
             
                			 <h5>Laggers Lane</h5>
                			
                  </div>
                  <br>
                  <br>
                  <center>
                  <h1>Forgot Password</h1>
                  
                  
                
                  <p>Your new Password is: <strong>$newpass</strong> </p>
                  <a href='http://laggerslane.tk'><button>Click here to login.</button></a>
                    <br> <br>
                  <p>Please keep your information updated. Thank You.</p>
                  
                  <br> <br>
                  <p>Laggers Lane, Shaw Blvd., Mandaluyong</p>
                  <p>You may contact us at 09898888888 or email us at laggerslane@gmail.com</p>
                  <br>
                	</center>		 
                </div>
                </body>
                </html>";
            
				$to = $email;
                $headers = "From: Administrator <laggerslane.tk>"."\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
               	$send = mail($to, $subject, $message, $headers);
				if($send) {
					$stmt1 = $pdo->prepare("Update user Set PW=:PW Where id =:id"); 
					$stmt1->bindParam(':PW', $newpass, PDO::PARAM_STR);
					$stmt1->bindParam(':id', $id, PDO::PARAM_STR);
					$insertednewpass = $stmt1->execute();
					if($insertednewpass){
						echo "<label style='color:red;'>Verified!</label>";   
				}else {
					
					echo "<label style='color:red;'>Invalid Username or Security Question did not match!</label>";
					
					}
				}	
          
            	

	
// $mailer = new PHPMailer();
// 			$mailer->IsSMTP();
// 			$mailer->Host = 'smtp.gmail.com:465'; 
// 			$mailer->SMTPAuth = TRUE;
// 			$mailer->Port = 465;
// 			$mailer->mailer="smtp";
// 			$mailer->SMTPSecure = 'ssl'; 
// 			$mailer->IsHTML(true);
// 			$mailer->SMTPOptions = array('ssl' => array(
// 									'verify_peer' => false, 
// 									'verify_peer_name' => false, 
// 									'allow_self_signed' => true)
// 									);
// 			$mailer->Username = 'metrocakeshop@gmail.com';
// 			$mailer->Password = 'password!@#$';
// 			$mailer->From = 'admin@noreply.com'; 
// 			$mailer->FromName = 'Demonstration';
// 			$mailer->Body =  
//       "";
// 			$mailer->Subject = 'Demonstration';
// 			$mailer->AddAddress();
// 			if(!$mailer->send()) {
// 			echo 'Message could not be sent.';
// 			echo 'Mailer Error: ' . $mailer->ErrorInfo;
// 			} else {
			
//       }
  }
}
$res = null;

$pdo = null;			
			
