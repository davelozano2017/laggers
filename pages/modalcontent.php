<?php 
session_start();
include '../cn.php';
?>
<link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
<link href="../bt/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../bt/css/jquery.timepicker.css" />
<link rel="stylesheet" type="text/css" href="../bt/css/bootstrap-datepicker.css" />

  <link rel="stylesheet" type="text/css" href="../bt/css/jquery.timepicker.css" />
  <link rel="stylesheet" type="text/css" href="../bt/css/bootstrap-datepicker.css" />

<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.23/themes/base/jquery-ui.css">
  
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
        


<script src="http://code.jquery.com/jquery-1.8.2.js"></script>

<script type="text/javascript" src="../bt/js/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="../bt/js/jquery.datepair.min.js"></script>
<script src="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.js"></script>
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
			url: 'AddAvailabilityExecution.php',
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
			url: 'AddAvailabilityExecution.php',
			data: { action: 'delete', id: id},
			success:function(){
				ShowAvailability()
			}
		});
	}

	function ShowAvailability() {
		$.ajax({
			url: 'ShowAvailability.php',
			cache:false,
			success:function(data){
				$('#ShowAvailability').html(data);
			}
		});
	}

</script>

