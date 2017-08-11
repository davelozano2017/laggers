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

//---------------LOGINS------------//



		$qtotalloginss = "Select * From logins";
		if ($res1 = $pdo->query($qtotalloginss)) {
			
				  $qtotallogins = $res1->rowCount();
			  
		}
		
		$qtotaldailyloginss = "SELECT * FROM logins WHERE day(dt) BETWEEN day(now()) and day(now())";
		if ($res2 = $pdo->query($qtotaldailyloginss)) {
			
				  $qtotaldailylogins = $res2->rowCount();
			  
		}
		
		$qtotal_weekly_loginss = "SELECT * FROM logins WHERE week(dt) BETWEEN week(now()) and week(now())";
		if ($res3 = $pdo->query($qtotal_weekly_loginss)) {
			
				  $qtotal_weekly_logins = $res3->rowCount();
			  
		}




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




<div class='form-group'>
		 <div class='col-md-4'>
			<div class="panel_box">
				<label>Total Logins:<br/><span><?php echo $qtotallogins;?></span></label>
			</div>
		 </div>
		 
		 <div class='col-md-4'>
			<div class="panel_box">
				<label>Daily Logins:<br/><span><?php echo $qtotaldailylogins;?></span></label>
			</div>
		 </div>
		 
		 
		 <div class='col-md-4'>
			<div class="panel_box">
				<label>Weekly Logins:<br/><span><?php echo $qtotal_weekly_logins;?></span></label>
			</div>
		 </div>
</div>











</center>
</body>
</html>