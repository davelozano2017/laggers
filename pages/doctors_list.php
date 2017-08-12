
<!DOCTYPE html>
<html lang="en">

	<head>
	<style>
	.panel{
	 
-webkit-box-shadow: 0px 5px 8px 0px rgba(50, 50, 50, 0.46);
	-moz-box-shadow:    0px 5px 8px 0px rgba(50, 50, 50, 0.46);
	box-shadow:         0px 5px 8px 0px rgba(50, 50, 50, 0.46);
  border-radius: 5px;
    border:solid lightblue 2px;

	
}		
	</style>
	</head>
	<body>



<div class="panel panel-primary">
				 <div class="panel_title" id="div_title">Doctors</div>
				<div  class="panel-body" id="leftcontent">

		<script type="text/javascript">
			function AdjustIframeHeightOnLoad() { document.getElementById("form-iframe").style.height = document.getElementById("form-iframe").contentWindow.document.body.scrollHeight + "px"; }
			function AdjustIframeHeight(i) { document.getElementById("form-iframe").style.height = parseInt(i) + "px"; }
		</script>

		<iframe id="form-iframe" src="pages/doctors_listcontent.php" style="margin:0; width:100%; height:800px; border:none; overflow:hidden;" scrolling="Yes" ></iframe>

		</div>
	</div>


 
 </body>
 
 </html>

<!-- 
 
<link rel="stylesheet" href="../js/jquery.mobile-1.4.3/demos/css/themes/default/jquery.mobile-1.4.3.min.css">
<link rel="stylesheet" href="../js/jquery.mobile-1.4.3/demos/_assets/css/jqm-demos.css">
<script src="../js/jquery.mobile-1.4.3/demos/js/jquery.js"></script>
<script src="../js/jquery.mobile-1.4.3/demos/_assets/js/index.js"></script>
<script src="../js/jquery.mobile-1.4.3/demos/js/jquery.mobile-1.4.3.min.js"></script>
<?php
include "../cn.php";

?>


<div data-role="" data-quicklinks="false">

<div role="main" class="ui-content jqm-content">
<div>
<ul data-role="listview" data-inset="true" data-divider-theme="a" data-filter="true">
<?php

$query = $db->query("SELECT * FROM doctor");
$check = $query->num_rows;
if($check < 0) {
    echo 'asdasd';
} else {
foreach($query as $row) {

$name = $row['LN'] . ', ' . $row['FN'] . ' ' . $row['MN'] . ' ' . $row['SN'];


?>

<li data-role="list-divider">	<span style="color:black" >Dr. <?php echo $name; ?></li>
<tr>
<li>

	
	<span style="float:left;width:100%;font-family:corbel"><b>Last Name: </b><?php echo $row['LN'] . ', ' . $row['SN']; ?></span>
	<span style="float:left;width:100%;font-family:corbel"><b>First Name: </b><?php echo $row['FN']; ?></span>
	<span style="float:left;width:100%;font-family:corbel"><b>Middle Name: </b><?php echo $row['MN']; ?></span>
	<span style="float:left;width:100%;font-family:corbel"><b>Specialization: <?php echo $row['SPECIALIZATION'];?></b></span>
	<span  style="float:left;width:100%;font-family:corbel"><?php echo "Contact Number: " . " " .$row['CN'] ?></span></br>
	<span  style="float:left;width:100%;font-family:corbel"><?php echo "Email: " . " " .$row['email'] ?></span>
	<span  style="float:left;width:100%;font-family:corbel">Availability:
	</span>
	<table cellspacing="0" width="100%" border=0>
    <thead>
    <tr>
        <th style="padding:5px;text-align:left" >Day</th>
        <th style="padding:5px;text-align:left" >From</th>
        <th style="padding:5px;text-align:left" >To</th>
    </tr>
    </thead>
    <?php 
    $query = $db->query("SELECT * FROM availability WHERE email = '".$row['email']."'");
    foreach($query as $row) :?>
        <tbody>
        <tr>
            <td style="padding:5px" ><?php echo date('M d Y D ', strtotime($row['day']))?> </td>
            <td style="padding:5px" ><?php echo $row['time_from']?></td>
            <td style="padding:5px" ><?php echo $row['time_to']?></td>
        </tr>
        </tbody>
    <?php endforeach; ?>
      
</table>

	
	

</li>
<li>
	
</li>




<?php
    }

}

?>
</ul>
</div>
</div>
</div> -->