<?php 
session_start();
if(empty($_SESSION['session_email'])){
	header('location: index.php');
}
include 'cn.php';
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

	<body>
		
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
            <li><a href="main.php?p=doctors_list">Doctors</a></li>
            <li><a href="main.php?p=news">News/Annoucements</a></li>
            <li><a href="main.php?p=contact_us">Contact Us</a></li>
            <li><a href="main.php?p=faq">Doctor Ratings/Feedbacks</a></li>
		
          </ul>
        </nav> 
   
	
	  </br>
				<div class="content">
					<div id="maincontent">

	</head>
<body>
      <div class="row row-offcanvas row-offcanvas-left">
	        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
		<div class="panel panel-primary">
						 <div class="panel_title">Doctor</div>
					
				 <div class="panel-body" style="background: linear-gradient(to bottom, #eeeeef 0%, #c7c7cb 98%); background-image: -webkit-gradient(linear, left top, left bottom, from(#eeeeef), to(#98));
  background-image: -webkit-linear-gradient(top, #eeeeef 0%, #c7c7cb 98%);
  background-image:      -o-linear-gradient(top, #eeeeef 0%, #c7c7cb 98%);">
				<div  class="list-group" >
			
            <a href="main.php" >Doctor Information</a>
            <a href="my_availability.php" >My Availability</a>
            <a href="view_appointment.php" >View Appointments</a>
            <a href="patient_history.php" >Patient History</a>
						<a href="generate_report.php" >Generate Report</a>
						<a href="my_uploads.php" >My Uploads</a>
            <a href="pages/logout.php" >Logout</a>
			
			
			

		 
	</br>
	</br>
	</div>
	
	

      <!--/.sidebar-offcanvas-->
				</div>	
		</div>
      </div><!--/row-->
        <div class="col-xs-12 col-sm-9">
          <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><<<</button>
          </p>
            <div class="panel panel-primary">
				 <div class="panel_title" id="div_title"></div>
				<div  class="panel-body" id="leftcontent">

                    <!-- start -->
                    <div id="show_appointment"></div>
                    <!-- end -->


				</div>	
			</div> 
        </div><!--/.col-xs-12.col-sm-9-->


</div>
      <hr>
		<center>
      <footer>
        <p> 2017</p>
      </footer>
		</center>

  </body>
</html>			

<!-- Modal -->
<div id="MyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Patient Information</h4>
      </div>
      <div class="modal-body">
		
		<div class="form-group">
			<label for="">Name</label>
	        <input type="hidden" id="hiddenid">
	        <p id="patient_name" class="form-control"></p>
		</div>

		<div class="form-group">
			<label for="">Email</label>
	        <p id="patient_email" class="form-control"></p>
		</div>

		<div class="form-group">
				<label for="">Appointed Date</label>
				<p id="appointment" class="form-control"></p>
		</div>

		<div class="form-group">
			<label for="">Purpose</label>
			<p id="purpose" class="form-control"></p>
		</div>

      </div>
      <div class="modal-footer">
        <div class="btn-group">
			<button type="button" class="btn btn-primary" id="approve">Approve</button>
			<button type="button" class="btn btn-danger" id="decline">Decline</button>
		</div>
      </div>
    </div>

  </div>
</div>
<!-- end modal -->

<!-- Modal -->
<div id="MyModalDecline" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Decline Patient</h4>
      </div>
      <div class="modal-body">
	        <input type="hidden" id="hiddenid" class="form-control">
		<h4> Are you sure you want to decline this patient? </h4>
      </div>
      <div class="modal-footer">
        <div class="btn-group">
			<button type="button" class="btn btn-danger" id="yes">Yes</button>
			<button type="button" class="btn btn-primary" id="no">No</button>
		</div>
      </div>
    </div>

  </div>
</div>
<!-- end modal -->
					</div>
				</div>
				
			
				
			</div>
		
		</center>
				</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
  
<script>
	function show_appointment() {
		$.ajax({
			url: 'pages/show_appointment.php',
			cache:false,
			success:function(data){
				$('#show_appointment').html(data);
			}
		});
	}
	show_appointment()

	function showmodal($id,$patient_name,$patient_email,$appointment,$purpose) {
		var id = $id;
		var patient_name = $patient_name;
		var patient_email = $patient_email;
		var appointment = $appointment;
		var purpose = $purpose;
		$('#MyModal').modal('show');
		$('#MyModal').find('#hiddenid').val(id);
		$('#MyModal').find('#patient_name').html(patient_name);
		$('#MyModal').find('#patient_email').html(patient_email);
		$('#MyModal').find('#appointment').html(appointment);
		$('#MyModal').find('#purpose').html(purpose);
	}

	function approveordecline() {
		$('#approve').click(function(e){
			e.preventDefault();
			var hiddenid = $('#hiddenid').val();
			var reference_code = $('#reference_code').val();
			$.ajax({
				type: 'POST',
				url : 'function_appointment.php',
				data: { action : 'approve', id : hiddenid },
				success:function(){
					show_appointment();
					alert('Approved');
					$('#MyModal').modal('hide');
				}
			})
		})

		$('#decline').click(function(e){
			e.preventDefault();
			$('#MyModal').modal('hide');
			$('#MyModalDecline').modal('show');
		})

		$('#no').click(function(){
			$('#MyModal').modal('show');
			$('#MyModalDecline').modal('hide');
		})

		$('#yes').click(function(e){
			e.preventDefault();
			var hiddenid = $('#hiddenid').val();
			$.ajax({
				type: 'POST',
				url : 'function_appointment.php',
				data: { action : 'decline', id : hiddenid },
				success:function(){
					show_appointment();
					alert('Declined');
					$('#MyModalDecline').modal('hide');
				}
			})
		})


		
	}
	approveordecline();		
</script>


</html>

