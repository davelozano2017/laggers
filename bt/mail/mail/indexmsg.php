<?php

session_start();

include "../../../cn.php";

$ln = $_GET['ln'];
$em = $_GET['em'];
$txt = $_GET['txt'];
$cn = $_GET['cn'];

$stmt1 = $pdo->prepare("INSERT into msg(nm,cn,em,msgs) VALUES (:ln, :cn, :em, :txt)"); 
			$stmt1->bindParam(':ln', $_GET['ln'], PDO::PARAM_STR);
			$stmt1->bindParam(':cn', $_GET['cn'], PDO::PARAM_STR);
			$stmt1->bindParam(':em', $_GET['em'], PDO::PARAM_STR);
			$stmt1->bindParam(':txt', $_GET['txt'], PDO::PARAM_STR);
			$insertedaudit = $stmt1->execute();
	

			

			
			if ($insertedaudit){
				
					/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';
require 'class.smtp.php';
require 'class.pop3.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
//Set the hostname of the mail server
$mail->Host = 'liham.gov.ph';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "tracer@sei.dost.gov.ph";

//Password to use for SMTP authentication
$mail->Password = "zimbra123";

//Set who the message is to be sent from
$mail->setFrom('tracer@sei.dost.gov.ph');

//Set an alternative reply-to address


//Set who the message is to be sent to
$mail->addAddress('lewjordenjulve@gmail.com');

//Set the subject line
$mail->Subject = 'DOST Scholar Graduate Inquiries';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("<html>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
  <title>DOST Scholar Graduate's TRACER Message from Scholar Graduate</title>
</head>
<body>

<div style='width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;'>
  <div align='center'>
    <a href='www.sei.dost.gov.ph/tracer'><img src='http://www.sei.dost.gov.ph/tracer/img/logo1.png' height='50' width='50' alt='PHPMailer rocks'></a>
	
	<h5><b>DOST-SEI SCHOLAR GRADUATES TRACER</b></h5>
			 <h5>(<b>TR</b>acking <b>A</b>ctual <b>C</b>areer <b>E</b>xperience <b>R</b>eport)</h5>
			
  </div>
  <br>
  <br>
   <div align='justify'>
  <b>From:</b>$ln
  <br>
  <b>Content:</b><p>$txt</p>
  <br>
  <br>
  <b>Contact Number:</b>$cn
  <br>
  <b>Email:</b>$em

 
   </div>	 
  
  
  <center>
  <br> <br>
  <p>Department of Science and Technology - Science Education Institute</p>
  <p>You may contact us at (632)837-1925 or email us at tracerdostsei@gmail.com</p>
  <br>
	</center>
</div>
</body>
</html>"
);



//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file


//send the message, check for errors
if (!$mail->send()) {
  
} else{
	 echo "<label style='color:green;'>Sent!</label>";
}	
				
			}
			
			
		

	
		
			

		
		

	
	


?>