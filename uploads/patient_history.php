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
            <a href="my_availability.php">My Availability</a>
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
								<div id="show_patient_history"></div>
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
            <input type="hidden" id="hiddenid" class="form-control">
            <input type="hidden" id="patient_name" class="form-control">
            <input type="hidden" id="patient_email" class="form-control">
            <input type="hidden" id="purpose" class="form-control">
            <input type="hidden" id="reference_code" class="form-control">
            <p id="display_patient_name" class="form-control"></p>
          </div>

          <div class="form-group">
            <label for="">Email</label>
                <p id="display_patient_email" class="form-control"></p>
          </div>

          <div class="form-group">
          <label for="">Purpose</label>
              <p id="display_purpose" class="form-control"></p>
        </div>

          <div class="form-group">
            <label for="">Amount</label>
            <input type="text" min=1 id="amount" class="form-control" required>
          </div>
            
            </div>
            <div class="modal-footer">
              <div class="btn-group">
            <button type="button" class="btn btn-primary" id="send">Send Payment</button>
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

function sendpayment(id) {
  
  $.ajax({
    type: 'POST',
    url: 'pages/retrievedata.php',
    cache:false,
    data: { action : 'sendpayment', id : id },
    dataType: 'json',
    success:function(response) {
      if(response.success == true) {
        $('#MyModal').modal('show');
        $('#MyModal').find('#hiddenid').val(response.id);
        $('#MyModal').find('#patient_name').val(response.patient_name);
        $('#MyModal').find('#patient_email').val(response.patient_email);
        $('#MyModal').find('#purpose').text(response.purpose);
        $('#MyModal').find('#reference_code').val(response.reference_code);

        $('#MyModal').find('#display_patient_name').text(response.patient_name);
        $('#MyModal').find('#display_patient_email').text(response.patient_email);
        $('#MyModal').find('#display_purpose').text(response.purpose);


      }
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

function send() {
  $('#send').click(function(e){
    $('#send').html('Please Wait').attr('disabled',true);
    e.preventDefault();
    var hiddenid = $('#hiddenid').val();
    var patient_name = $('#patient_name').val();
    var patient_email = $('#patient_email').val();
    var amount = $('#amount').val();
    var reference_code = $('#reference_code').val();
    $.ajax({
      type: 'POST',
      url: 'pages/sendpayment.php',
      data: {
        action : 'sendpayment', id : hiddenid, patient_name : patient_name, 
        patient_email : patient_email, amount : amount, reference_code : reference_code 
      },
      dataType: 'json',
      cache: false,
      success:function(response){
        if(response.success == true) {
          $('#send').html('Send Payment').attr('disabled',false);
          alert('Payment has been sent to patient ' + patient_name);
          $('#MyModal').modal('hide');
        } else if(response.success == 'falses') {
          $('#send').html('Send Payment').attr('disabled',false);
          alert('Amount is empty');
        }else {
          $('#send').html('Send Payment').attr('disabled',false);
          alert('This patient was already received an email for payment');
          $('#MyModal').modal('hide');
        }
      }
    });
  })
}

send();
show_patient_history();

</script>
</html>

