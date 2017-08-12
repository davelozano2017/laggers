<?php 
session_start();
include 'cn.php';
$id = $_GET['id'];
$query = $db->query("SELECT * FROM doctor  WHERE id = $id");
$row = $query->fetch_object();
$email = $row->email;
$doctor_name = $row->FN. ' '.$row->MN. ' '.$row->LN. ' '.$row->SN;
$specialization = $row->email;
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

    <title>Lagger's Lane</title>


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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
        <div class="col-xs-12 col-sm12">
          <p class="pull-left visible-xs">
          </p>
            <div class="panel panel-primary">
				 <div class="panel_title" id="div_title"></div>
				<div  class="panel-body" id="leftcontent">
                     <!-- start -->
                     
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="doctor_list.php" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Name</label>
                            <p class="form-control">Dr. <?php echo $row->FN.' '.$row->MN. ' '.$row->LN. ' '.$row->SN?></p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Specialization</label>
                            <p class="form-control" ><?php echo ucwords($row->SPECIALIZATION)?></p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Years of Experience</label>
                            <p class="form-control"><?php echo $row->YEARS?></p>
                        </div>
                    </div>

                    <?php 

                    if(empty($_SESSION['session_iname']) && empty($_SESSION['session_email'])) {
                        
                    } else {
                        echo 
                        '
                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="clearfix"></div>
                              <div class="col-md-1"></div>
                              <div class="alert alert-info col-md-2 col-sm-12 text-center">Very Disatisfied - 1</div>
                              <div class="alert alert-info col-md-2 col-sm-12 text-center">Disatisfied - 2</div>
                              <div class="alert alert-info col-md-2 col-sm-12 text-center">Ok - 3</div>
                              <div class="alert alert-info col-md-2 col-sm-12 text-center">Satisfied - 4</div>
                              <div class="alert alert-info col-md-2 col-sm-12 text-center">Very Satisfied - 5</div>
                              <div class="col-md-1"></div>
                              <div class="clearfix"></div>
                              <center>
                              <label for="">Rate</label>
                              <input type="number" id="rating-empty-clearable" class="rating" data-clearable required/>
                              </center>
                          </div>
                        </div>';
                    }
                    ?>

                    <div class="col-md-12">
                        <div class="form-group">
                            <table style="width:100%" id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Day</th>
                                    <th>From</th>
                                    <th>To</th>
                                    </tr>
                                </thead>
                                    <?php 
                                    $q = $db->query("SELECT * FROM availability WHERE email = '$email'");
                                    $i = 0;
                                    foreach($q as $r):  
                                    ?>
                                    <tr>
                                        <td style="width:1%"><?php echo ++$i?></td>
                                        <td><?php echo date('M d Y D',strtotime($r['day']))?></td>
                                        <td><?php echo $r['time_from']?></td>
                                        <td><?php echo $r['time_to']?></td>
                                    <?php endforeach ?>
                                </table>

                        </div>
                    </div>

                    
              <div class="modal fade" tabindex="-1" role="dialog" data-toggle="modal" data-target="#form-content">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Rating</h4>
                          </div>
                              <div class="modal-body">
                                  
                                <label> blablablablabla </label> <label id="output"></label>
                                <input type="hidden" value="<?php echo $doctor_name?>" id="doctor_name">
                                <input type="hidden" value="<?php echo $specialization?>" id="specialization">

                              </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" id="submit">Submit</button>
                          </div>
                      </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->

                   
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rating-input/0.4.0/bootstrap-rating-input.min.js"></script>
<script>

     $(function(){
        var doctor_name = $('#doctor_name').val();
        var specialization = $('#specialization').val();
        $('input').on('change', function(){
          var ratings = $(this).val();
            
          $('.modal').find('#output').html(ratings);
          if(output == 0) {
            $('.modal').modal('hide');
          } else {
            $('.modal').modal('show');
          }
          $('#submit').click(function(){
              $('#submit').html('Please Wait').attr('disabled',true);
              $.ajax({
                type: 'POST',
                url: 'pages/doctor_rate.php',
                data: {
                  action: 'rate', doctor_name : doctor_name, specialization : specialization, rate : ratings
                },
                dataType: 'json',
                success:function(response) {
                  if(response.success == true) {
                    alert('your rate has been saved.');
                    $('#submit').html('Submit').attr('disabled',false);
                    $('.modal').modal('show');
                  } else {
                    alert('you already cast your rate');
                    $('#submit').html('Submit').attr('disabled',false);
                  }
                }
              });
            });
        });

          


      });
    

$(document).ready(function() {
  
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              responsive: true
            });
          }
        };
      
      
        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();


        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>


</html>

