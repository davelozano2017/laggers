<?php 
session_start();
include '../cn.php';
?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.23/themes/base/jquery-ui.css">
<link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
<link href="../bt/css/bootstrap.min.css" rel="stylesheet">
<link href="../bt/css/bootstrap-clockpicker.min.css" rel="stylesheet">
<form method="POST">
			<div class="form-group">
				<label for="day">Day</label>
				<input type="text" name="day" id="day" class="form-control" >
			</div>

			<div class="form-group clockpickerfrom">
				<label for="from">From</label>
				<input type="text" class="form-control" id="from">
			</div>

			<div class="form-group clockpickerto">
				<label for="to">To</label>
				<input type="text" class="form-control" id="to">
			</div>

			<div class="modal-footer">
				<button type="button" onclick="AddAvailability()" class="btn btn-primary" >Add</button>
			</div>
        </form>
        


<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.js"></script>
<script src="../bt/js/bootstrap.min.js"></script>
<script src="../bt/js/bootstrap-clockpicker.min.js"></script>

<script type="text/javascript">
$('.clockpickerfrom').clockpicker({
    placement: 'bottom',
    align: 'left',
    donetext: 'Done',
	autoclose: true,
	min: '10:15'
	
});

$('.clockpickerto').clockpicker({
    placement: 'bottom',
    align: 'left',
    donetext: 'Done',
	autoclose: true
});
</script>
<script>
$(function() {
$( "#day" ).datepicker({
    buttonImageOnly: true,
    dateFormat:'yy-mm-dd',
    changeYear: true,
    changeMonth: true,
    minDate: 0
});

});





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

