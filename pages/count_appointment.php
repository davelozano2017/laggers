<?php
include "../cn.php";
$form_name = "Visits";

//---------------VISITS------------//
/*
$qtotalvisits = mysql_query("SELECT * FROM visits");	
$qtotalvisits = mysql_num_rows($qtotalvisits);

$qtotaldailyvisits = mysql_query("SELECT * FROM visits WHERE day(dt) BETWEEN day(now()) and day(now())");	
$qtotaldailyvisits = mysql_num_rows($qtotaldailyvisits);
		
$qtotal_weekly_visits = mysql_query("SELECT * FROM visits WHERE week(dt) BETWEEN week(now()) and week(now())");
$qtotal_weekly_visits = mysql_num_rows($qtotal_weekly_visits);
*/

$query = $db->query("SELECT * FROM appointment");
$total_appointment = $query->num_rows;

$query = $db->query("SELECT * FROM appointment WHERE status = 0");
$total_pendings = $query->num_rows;

$query = $db->query("SELECT * FROM appointment WHERE status = 1");
$total_approved = $query->num_rows;

$query = $db->query("SELECT * FROM appointment WHERE status = 2");
$total_declined = $query->num_rows;



?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.panel_box{
	
	
	background: linear-gradient(to bottom, #eeeeef 0%, #c7c7cb 98%); 
	background-image: -webkit-gradient(linear, left top, left bottom, from(#eeeeef), to(#98));
  background-image: -webkit-linear-gradient(top, #eeeeef 0%, #c7c7cb 98%);
  background-image:      -o-linear-gradient(top, #eeeeef 0%, #c7c7cb 98%);
	border-radius:8px;
	border:solid #accbe0 2px;
	margin-right:16px;
	margin-top:8px;
	margin-bottom:8px;
	box-shadow: 0px 2px 0px rgba(0, 0, 0, 0.3);
	-webkit-box-shadow: rgba(0,0,0,.1) 1px 2px 2px;
	-moz-box-shadow: rgba(0,0,0,.1) 1px 2px 2px;
	box-shadow: rgba(0,0,0,.1) 1px 2px 2px;
	background-repeat:no-repeat;
	background-repeat:no-repeat;
	background-position:center bottom; 
	background-size: contain;
	background-color:white;
	text-align:center;
	font-size:18px;
	padding:10px;
	float:left;
	align:center;
	
	
}
.panel_box span{
	font-size:36px;
	text-align: center;
}
</style>
</head>
<body>

<center>




		    
<div class="row">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-md-6">
        <div class="well">
          <h4 class="text-info"><span class="label label-info pull-right"><?php echo $total_appointment;?></span> Total Appointments </h4>
        </div>
      </div>
      <div class="col-md-6">
        <div class="well">
          <h4 class="text-success"><span class="label label-success pull-right"><?php echo $total_approved;?></span> Total Approved </h4>
        </div>
      </div>
      <div class="col-md-6">
        <div class="well">
          <h4 class="text-danger"><span class="label label-danger pull-right"><?php echo $total_declined;?></span> Total Declined </h4>
        </div>
      </div>
      <div class="col-md-6">
        <div class="well">
          <h4 class="text-warning"><span class="label label-warning pull-right"> <?php echo $total_pendings;?></span> Total Pendings </h4>
        </div>
      </div>
    </div><!--/row-->    
  </div><!--/col-12-->
</div><!--/row-->











</center>
</body>
</html>