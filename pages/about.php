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
				 <div class="panel_title" id="div_title">About Laggers Lane Hospital</div>
				<div  class="panel-body" id="leftcontent">



<?php
$q = "Select * From news where id='1'";

$news  = $pdo->query($q);
$result = $news->fetchAll();
?>

	<div data-role="" data-quicklinks="false">

		<div role="main" class="ui-content jqm-content">
				
				
	
						<?php

						foreach( $result as $row ) {
						$decoded=html_entity_decode($row['content'])
						?>
					
								<span style="float:left;width:0%;color:white"><?php echo $row['title'] ?></span>
								<span style="float:left;width:100%;"><?php echo $decoded ?></span>

					
						<?php
						}
						?>
						</div>
					
						
		</div>
	</div>
</div>
<link rel="stylesheet" href="../js/jquery.mobile-1.4.3/demos/css/themes/default/jquery.mobile-1.4.3.min.css">
		<link rel="stylesheet" href="../js/jquery.mobile-1.4.3/demos/_assets/css/jqm-demos.css">
		<script src="../js/jquery.mobile-1.4.3/demos/js/jquery.js"></script>
		<script src="../js/jquery.mobile-1.4.3/demos/_assets/js/index.js"></script>
		<script src="../js/jquery.mobile-1.4.3/demos/js/jquery.mobile-1.4.3.min.js"></script>




 </body>
 
 </html>