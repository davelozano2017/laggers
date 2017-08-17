<?php
if(isset($_SESSION['session_iid'])){

}else{



 }
ob_start();
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo1.png">

    <title>Online Appointment</title>

    <!-- Bootstrap core CSS -->
    <link href="bt/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bt/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index2.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bt/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

		<link rel="ICON" href="img/logo1.png"/>
	
		
		
	

		
	
		<link rel="stylesheet" href="css/index2.css"/>
	
		<link rel="stylesheet" href="css/panel.css"/>
		
		<!--<link href="includes/select2-3.5.1/select2.css" rel="stylesheet"/>
		<script src="includes/select2-3.5.1/select2.js"></script>
		-->
		
		
	</head>
	<body style="padding-top:100px">
	

		
	
			
			
			<?php if(isset($_SESSION['session_iid'])){ ?>
			
				
					<?php include "main.php";?>
			
			
			<?php }else{ ?>
							
			<?php if(isset($_SESSION['session_i'])){ ?>
			
		
					<?php include "main.php";?>
			
			
			<?php }else{ ?>
			
					<?php include "main.php";?>
			
			
							
			<?php } ?>
							
			<?php } ?>
			
			
		
	
	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bt/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bt/assets/js/ie10-viewport-bug-workaround.js"></script>
	  <script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/y_crud.js"></script>
		<script type="text/javascript" src="js/y_crud_template.js"></script>
	
	</body>
		
</html>
