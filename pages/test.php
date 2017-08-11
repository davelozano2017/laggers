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

<?php if(isset($_SESSION['session_i'])){ ?>

<div class="panel panel-primary">
				 <div class="panel_title" id="div_title">About Kwak Kwak Hospital</div>
				<div  class="panel-body" id="leftcontent">



<iframe name="form-iframe" id="form-iframe" src="pages/scholars/test_content.php" style="margin:0; width:100%; height:800px; border:none; overflow:hidden;" scrolling="Yes" ></iframe>
		
</div>
</div>

<?php }else{

echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
 } ?>
 </body>
 </html>