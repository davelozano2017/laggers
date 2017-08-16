<?php 
session_start();
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
<style>
.disabled .fc-day-content {

    background-color: #123959;

    color: #FFFFFF;

    cursor: default;

}
</style>
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

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.8.23/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">

  <link rel="stylesheet" type="text/css" href="bt/css/jquery.timepicker.css" />
  <link rel="stylesheet" type="text/css" href="bt/css/bootstrap-datepicker.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

	<link href='bt/css/fullcalendar.min.css' rel='stylesheet' />
	<link href='bt/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
	

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
            <li><a href="doctor_list.php">Doctors</a></li>
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
						 <div class="panel_title">Patient</div>
					
				 <div class="panel-body" style="background: linear-gradient(to bottom, #eeeeef 0%, #c7c7cb 98%); background-image: -webkit-gradient(linear, left top, left bottom, from(#eeeeef), to(#98));
  background-image: -webkit-linear-gradient(top, #eeeeef 0%, #c7c7cb 98%);
  background-image:      -o-linear-gradient(top, #eeeeef 0%, #c7c7cb 98%);">
				<div  class="list-group" >
			
		
    
		  
		  	
		

	
            <a href="#" onclick="show_page('profile','0')" >Personal Information</a>
            <a href="appointment.php" >View Appointments</a>
            <a href="my_history.php">My History</a>
            <a href="billing.php">Billing</a>
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
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="specialization">Search by Specialization</label>
                <select class="form-control specialization" id="search" style="width:100%">
                    <option value="" selected></option>
                    <?php $query = $db->query("SELECT * FROM specialization");
                    foreach ($query as $row) : ?>
                        <option value="<?php echo $row['specialization']?>"><?php echo $row['specialization']?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
    </div>
    <input type="text" name="today" id="today" value="<?php echo date('Y-m-d')?>">
    <div id="calendarshow"></div>
    <div id="calendarerror" class=""></div>

                    
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
<script src='bt/js/moment.min.js'></script>
<script src='bt/js/fullcalendar.min.js'></script>
<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.js"></script>
<script type="text/javascript" src="bt/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="bt/js/jquery.timepicker.min.js"></script>
<script src="bt/assets/js/ie-emulation-modes-warning.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
  $(".specialization").select2({
          placeholder: "Select Doctor's Specialization",
          allowClear: true
    });


var today = $('#today').val();


    function search() {
        
        $('#search').change(function(e){
        e.preventDefault();
        var search = $('#search').val();
        showcalendar() 
            // start ajax
            $.ajax({
                type:'POST',
                url : 'functions.php',
                data: { action : 'search', specialization : search },
                dataType: 'json',
                success:function(data){
                    // start calendar
                    $('#calendar').fullCalendar({
                        displayEventTime : false,
                        header: {
                            left: 'next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        
                        defaultDate: new Date(),
                        navLinks: true,  
                        selectable: true,
                        select: function(start, end) {
                            if(start.isBefore(moment())) {
                                $('#calendar').fullCalendar('unselect');
                                return false;
                            } 

                            if(start.isAfter(moment())) {
                                $('#calendar').fullCalendar('unselect');
                                return false;
                            } 
                            
                            $('.modal').modal({ backdrop: 'static', keyboard: false })
                            $('.modal').find('#title').text('');
                            $('.modal').find('#from').text('');
                            $('.modal').find('#hiddenid').val('');
                            $('.modal').find('#doctor_email').val('');
                            $('.modal').find('#specialization').text('');
                            $('.modal').find('#day').val('');
                            $('.modal').find('#chosentime').val('');
                            $('#submit').attr('disabled',true);
                            $('.timepicker').timepicker('remove');
                            $('#submit').attr('disabled',true);
                        },
                        
                        eventClick: function(event, element) {
                            if(today > event.day) {                               
                                $('#submit').hide();
                            } else {
                                $('#submit').show();
                            }
                            $('.timepicker').timepicker({ 
                                'timeFormat': 'g:i A',
                                minTime:  event.time_base_from,
                                maxTime: event.time_base_to
                                
                            });
                            // Display the modal and set the values to the event values.
                            $('.modal').modal({ backdrop: 'static', keyboard: false })
                            $('.modal').find('#title').text(event.title);
                            $('.modal').find('#from').text(event.time_from + ' - ' + event.time_to);
                            $('.modal').find('#hiddenid').val(event.id);
                            $('.modal').find('#doctor_email').val(event.email);
                            $('.modal').find('#specialization').text(event.SPECIALIZATION);
                            $('.modal').find('#day').val(event.day);
                            $('.modal').find('#chosentime').val('');

                        
                        },
                            editable: false,
                            eventLimit: true,
                            events: data

                    });
                    $('#calendarerror').hide();
                    
                    // end calendar
                },error:function() {
                $('#calendarerror').show();
                $('#calendarerror').html('No result found').addClass('alert alert-danger');
                }
            });
            // end ajax
        })
    }
   
    search();

    function showcalendar() {
        $.ajax({
            url : 'calendarshow.php',
            success:function(data){
                $('#calendarshow').html(data)
            }
        });
    }


</script>

</html>

