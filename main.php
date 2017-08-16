<?php
if(isset($_SESSION['session_iid'])){

}else{
session_start();
include "cn.php";
include "function/enc.php";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="img/1.png">

<title>Online Appointment</title>


<link href="bt/css/bootstrap.min.css" rel="stylesheet">

<link href="bt/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<link href="css/index2.css" rel="stylesheet">
<link href="css/panels.css" rel="stylesheet">
<link href="css/hrs.css" rel="stylesheet">

<link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<script src="bt/assets/js/ie-emulation-modes-warning.js"></script>

	<style>
.panel{
	
-webkit-box-shadow: 0px 5px 8px 0px rgba(50, 50, 50, 0.46);
-moz-box-shadow:    0px 5px 8px 0px rgba(50, 50, 50, 0.46);
box-shadow:         0px 5px 8px 0px rgba(50, 50, 50, 0.46);
border-radius: 5px;
border:solid lightblue 2px;

}		
	
.panel-body{

}

.list-group a label{

cursor:pointer;
color:white;

}
.list-group a:hover{

background-image:url(img/nav_bg_hover.png);
color:orange;
text-decoration: none;
font-weight: bold;
}

.panel-body img{
width:28px;
}

.list-group a{
background:white;
padding:8px;
display:block;

margin:4px;
text-decoration: none;
border-radius:4px;

-webkit-box-shadow: rgba(0,0,0,.1) 1px 2px 2px;
-moz-box-shadow: rgba(0,0,0,.1) 1px 2px 2px;
box-shadow: rgba(0,0,0,.1) 1px 2px 2px;
text-align:left;


background-image:url(img/nav_bg.png);
color:white;
}

.list-group-items.active{


background-image:url(img/nav_bg_hover.png);
color:orange;
}
</style>
	
</head>

<body onload="<?php if(!isset($_GET['p'])){
	if(isset($_SESSION['session_i'])){
		if($_SESSION['session_itype']=="Administrator"){
			?>show_page('profile_admin','0')<?php 
		}elseif($_SESSION['session_itype']=="Patient"){
			?>show_page('profile','0')<?php 
		}elseif($_SESSION['session_itype']=="Doctor"){
		?>show_page('profile_doctor','0')<?php } 
}}
	?> ">
	
		<div class="body_wrap">
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		
		<a class="navbar-brand" href="#">Lagger's Lane Online Appointment System</a>
	</div>
	<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 0.8px;">
		<form class="navbar-form navbar-right">
	<div class="form-group">
			<span id="lbltextstatus" style="color:orange"></span>
		</div>

	</div>
</form>
	
	
	</div>
</nav>
	

		
		<div class="container" > 
			
		

			<img src="img/BANNER1.jpg" class="featurette-image img-responsive left-block" style="margin-bottom: 5px; height: 1%; width: 100%"/>
								
								
					
						
		
							
							
			

	<nav>
				
		<ul class="nav nav-justified">
		
		<li><a href="main.php" class="active">Home</a></li>
		<li><a href="main.php?p=about">About </a></li>
		<li><a href="doctor_list.php">Doctors</a></li>
		<li><a href="main.php?p=news">News/Annoucements</a></li>
		<li><a href="main.php?p=contact_us">Contact Us</a></li>
		<li><a href="main.php?p=faq">Doctor Ratings/Feedbacks</a></li>
	
		</ul>
	</nav> 


	</br>
	
			<div class="content">
				<div id="maincontent">
						
					<?php
			
					if(isset($_GET['p'])){
						include "pages/" .  $_GET['p'] . ".php";
					}else{
						include "pages/home.php";
					}
					
				
					?>
				
				</div>
			</div>
			
		
			
		</div>
	
	</center>
			</div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="bt/js/bootstrap.min.js"></script>
<script src="bt/assets/js/ie10-viewport-bug-workaround.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/y_crud.js"></script>
	<script type="text/javascript" src="js/y_crud_template.js"></script>
	<script src="bt/js/offcanvas.js"></script>
	
</body>
<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script>
function UpdateSpecialization(id) {
	var specialization = $('#specialization'+id).val();
	$.ajax({
		type:'GET',
		url: 'pages/specialization_execute.php',
		data: {action: 'update', id: id, specialization: specialization},
		success:function(){
			$('#span_update_status'+id).html('success').fadeIn().delay(1).fadeOut();
		}
	})		
}

function AddSpecialization() {
	var specialization = $('#specialization').val();
	$.ajax({
		type: 'GET',
		url: 'pages/specialization_execute.php',
		data: {action: 'add', specialization: specialization},
		success:function(){
			specialization.val() = null;
		}
	});
}

function hidediv() {
	$('button#addnew').show();
}

function AddAvailability() {
	var day = $('#day').val();
	var from = $('#from').val();
	var to = $('#to').val();

	$.ajax({
		type: 'POST',
		url: 'pages/AddAvailabilityExecution.php',
		data: { action: 'add', day: day, from: from, to: to },
		success:function(){
			ShowAvailability()
		}
	});
}

function DeleteAvailability($id) {
	var id = $id;
	$.ajax({
		type: 'POST',
		url: 'pages/AddAvailabilityExecution.php',
		data: { action: 'delete', id: id},
		success:function(){
			ShowAvailability()
		}
	});
}


$(".specialization").select2({
		placeholder: "Select Doctor's Specialization",
		allowClear: true
});



</script>

</html>

