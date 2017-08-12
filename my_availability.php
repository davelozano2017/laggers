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

    <link rel="stylesheet" type="text/css" href="bt/css/jquery.timepicker.css" />
<link rel="stylesheet" type="text/css" href="bt/css/bootstrap-datepicker.css" />

  <link rel="stylesheet" type="text/css" href="bt/css/jquery.timepicker.css" />
  <link rel="stylesheet" type="text/css" href="bt/css/bootstrap-datepicker.css" />

<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.23/themes/base/jquery-ui.css">

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
            <a href="my_availability.php">My Availability</a>
            <a href="view_appointment.php" >View Appointments</a>
            <a href="patient_history.php" >Patient History</a>
			<a href="generate_report.php" >Generate Report</a>
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
                <div id="divnav" style="background:;">
                    <div class="form-group">
                        <input type="button" data-toggle="modal" data-target="#myModal" value="Add New" class="btn btn-sm btn-warning" />
                    </div>
                </div>
                    <!-- start -->
                    <div id="ShowAvailability"></div>
                    <!-- end -->

                  
				</div>	
			</div> 
        </div><!--/.col-xs-12.col-sm-9-->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Availability</h4>
                    </div>
                    <div class="modal-body">
                    <form method="POST">
			<div class="form-group">
				<label for="day">Day</label>
				<input type="text" name="day" id="day" class="form-control" >
			</div>

			<div id="datepairExample">	
				<div class="form-group clockpickerfrom">
					<label for="from">From</label>
					<input type="text" class="form-control time start" id="from">
				</div>

				<div class="form-group">
					<label for="to">To</label>
					<input type="text" class="form-control timepicker time end" id="to">
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" onclick="AddAvailability()" class="btn btn-primary" >Add</button>
			</div>
        </form>
                    </div>
                </div>
            </div> 
        </div>

</div>
      <hr>
		<center>
      <footer>
        <p> 2017</p>
      </footer>
		</center>

  </body>
</html>			

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
	 	

<script src="http://code.jquery.com/jquery-1.8.2.js"></script>

<script type="text/javascript" src="bt/js/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="bt/js/jquery.datepair.min.js"></script>
<script src="https://jonthornton.github.io/jquery-timepicker/jquer  y.timepicker.js"></script>
<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.js"></script>
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

$( "#day" ).datepicker({
		buttonImageOnly: true,
		dateFormat:'yy-mm-dd',
		changeYear: true,
		changeMonth: true,
		minDate: 0
	});


    // initialize input widgets first
    $('#datepairExample .time').timepicker({
        'showDuration': true,
        'timeFormat': 'h:i A',
		'minTime' : '08:00:00',
		'maxTime' : '22:00:00'
    });


    // initialize datepair
    $('#datepairExample').datepair();

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

	
function ShowAvailability() {
		$.ajax({
			url: 'pages/ShowAvailability.php',
			cache:false,
			success:function(data){
				$('#ShowAvailability').html(data);
			}
		});
	}


	function show_patient_history() {
		$.ajax({
			url: 'pages/show_patient_history.php',
			cache:false,
			success:function(data){
				$('#show_patient_history').html(data);
			}
		});
	}
show_patient_history();


function notify(id) {
  $('#notify'+id).html('Please Wait').attr('disabled',true);
  $.ajax({
    type: 'POST',
    url: 'pages/notify_patient.php',
    cache: false,
    data: { action : 'declined', id : id },
    success:function() {
      alert('An email has been sent');
      $('#notify'+id).html('Notify Patient').attr('disabled',false);
    }
  });
}
ShowAvailability();
</script>


</html>

