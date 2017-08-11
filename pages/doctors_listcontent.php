
<link rel="stylesheet" href="../js/jquery.mobile-1.4.3/demos/css/themes/default/jquery.mobile-1.4.3.min.css">
<link rel="stylesheet" href="../js/jquery.mobile-1.4.3/demos/_assets/css/jqm-demos.css">
<script src="../js/jquery.mobile-1.4.3/demos/js/jquery.js"></script>
<script src="../js/jquery.mobile-1.4.3/demos/_assets/js/index.js"></script>
<script src="../js/jquery.mobile-1.4.3/demos/js/jquery.mobile-1.4.3.min.js"></script>
<?php
include "../cn.php";

$sth = $pdo->prepare("Select * From doctor order by LN ASC ");
$sth->execute()
?>


<div data-role="" data-quicklinks="false">

<div role="main" class="ui-content jqm-content">
<div>
<ul data-role="listview" data-inset="true" data-divider-theme="a" data-filter="true">
<?php

$rows = $sth->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row){


$name = $row['LN'] . ', ' . $row['FN'] . ' ' . $row['MN'] . ' ' . $row['SN'];


?>

<li data-role="list-divider">	<span style="color:black" >Dr. <?php echo $name; ?></li>
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
            <td style="padding:5px" ><?php echo $row['day']?> </td>
            <td style="padding:5px" ><?php echo $row['time_from']?></td>
            <td style="padding:5px" ><?php echo $row['time_to']?></td>
        </tr>
        </tbody>
    <?php endforeach; ?>
      
</table>

	
	

</li>
<li>
	
	<span style="width:50px;color:#888;font-family:corbel">2017</span></br>
	
	</hr>

</li>




<?php
}
?>
</ul>
</div>
</div>
</div>