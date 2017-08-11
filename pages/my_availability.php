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
		<iframe src="pages/modalcontent.php" style="overflow:scroll; border:none;width:100%;height:300px;">
	</div>
  </div>
</div>
