<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
include "../../cn.php";
include "../../includes/comment/comment.class.php";

/*
/	This array is going to be populated with either
/	the data that was sent to the script, or the
/	error messages.
/*/

/*$arr = array();
$validates = Comment::validate($arr); */
			
    $stmt = $pdo->prepare("insert into comments (name,url,email,body,type) values (:session_iname,'',:session_email,:body,:session_itype)"); 
	$stmt->bindParam(':session_itype',$_SESSION['session_itype'], PDO::PARAM_STR);
	$stmt->bindParam(':session_iname', $_SESSION['session_iname'], PDO::PARAM_STR);
	$stmt->bindParam(':session_email', $_SESSION['session_email'], PDO::PARAM_STR);
	$stmt->bindParam(':body', $_POST['body'], PDO::PARAM_STR);
    $inserted = $stmt->execute();
if($inserted){
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=../../main.php?p=faq\">";
}
						

						
/*						
if($validates)
{ */
	/* Everything is OK, insert to database: */
	/*
	mysql_query("	INSERT INTO comments(name,url,email,body,type)
					VALUES (
						'".$arr['name']."',
						'',
						'".$arr['email']."',
						'".$arr['body']."',
						'".$_SESSION['session_itype']."')");
						*/
						
	
/*	$arr['dt'] = date('r',time());
	$arr['id'] = mysql_insert_id(); */
	
	/*
	/	The data in $arr is escaped for the mysql query,
	/	but we need the unescaped variables, so we apply,
	/	stripslashes to all the elements in the array:
	/*/
	
	/*$arr = array_map('stripslashes',$arr);
	
	$insertedComment = new Comment($arr); */
	
	
	/* Outputting the markup of the just-inserted comment: */

	/* echo json_encode(array('status'=>1,'html'=>$insertedComment->markup())); */
/*
}
else
{ */
	/* Outputtng the error messages */
	/* echo '{"status":0,"errors":'.json_encode($arr).'}';
}
*/
?>