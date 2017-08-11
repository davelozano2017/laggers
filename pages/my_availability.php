<?php
include "../cn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

	<div id="divnav" style="background:;">
		<div class="form-group">
			<input type="button" data-toggle="modal" data-target="#myModal" value="Add New" class="btn btn-sm btn-warning" />
			<input type="button" onclick="ShowAvailability()" value="Show Availability" class="btn btn-sm btn-warning" />
		</div>
	</div>
<div class="clearfix">
</div>

	 <div id="ShowAvailability"></div>

</body>
</html>

<!-- Trigger the modal with a button -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Availability</h4>
      </div>
      <div class="modal-body">
		<form method="POST">
			<div class="form-group">
				<label for="day">Day</label>
				<select name="day" id="day" class="form-control">
					<option value="Monday" selected>Monday</option>
					<option value="Tuesday">Tuesday</option>
					<option value="Wednesday">Wednesday</option>
					<option value="Thursday">Thursday</option>
					<option value="Friday">Friday</option>
					<option value="Saturday">Saturday</option>
					<option value="Sunday">Sunday</option>
				</select>
			</div>

			<div class="form-group">
				<label for="day">From</label>
				<input type="text" class="form-control" name="from" id="from">
			</div>


			<div class="form-group">
				<label for="day">To</label>
				<input type="text" class="form-control" name="to" id="to">
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="button" onclick="AddAvailability()" class="btn btn-primary" >Add</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</form>
	</div>
  </div>
</div>
