<?php

include "cn.php";

		
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo1.png">

    <title>Online Appointment</title>

    <link href="bt/css/bootstrap.min.css" rel="stylesheet">

    <link href="bt/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/index2.css" rel="stylesheet">

    <script src="bt/assets/js/ie-emulation-modes-warning.js"></script>

		<style type="text/css">
.indent-small {
  margin-left: 5px;
}
.form-group.internal {
  margin-bottom: 0;
}
.dialog-panel {
  margin: 10px;
}
.datepicker-dropdown {
  z-index: 200 !important;
}

label.control-label {
  font-weight: 600;
  color: #777;
}


hr.hr2 {
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
}



		
		</style>
		
	</head>
	


<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
		<div id="pageloaddiv"></div>
		<a class="navbar-brand" href="#">Online Appointment</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="button" value="Send" onclick="msgsave()" class="btn btn-warning"/>
            </div>
            <div class="form-group">
               <a style="cursor:pointer;color:white;" href="pages/logout.php"><input type="button" value="Cancel" class="btn btn-warning"/></a></td>
            </div>
            <div class="form-group">
              <span id="lbltextstatus" style="color:orange"></span>
            </div>
			
          </form>
        </div>
      </div>
	  
    </nav>
	
     <div class="container">	
	 

	
			
		<div class="panel panel-primary">
				 <div class="panel_title" id="div_title"></div>
				<div  class="panel-body">
				
				
  
      <div style="line-height:1%;">
			<br>
			<a href="" ><img src="img/logo1.png" class="center-block img-responsive" style="width:88px; height:88px;"/></a> 
		</div>
	   
		<div style="line-height:1%;">
			</br>
			 <center><h5><b>Kwak kwak Hospital</b></h5></center>
			 
			 <center><h5>You may contact us at (632)837-1925 or email us at tracerdostsei@gmail.com</h5></center>
			
			</div>
		 </br>
			 </br>
			 
		
			
			 

<form>

<div class="form-group"> 
	  <div class="row">
            <div class="col-md-12">
                 <label class='control-label' for='id_title'> <span style="color:red">MESSAGE US</span></label>
            </div>

       </div>
</div>

    <div class="form-group">
	 
	 
        <div class="row">
		
            <div class="col-md-6">
                <label class="control-label">Name:</label>
                <input type="text" class="form-control" required name="ln" id="ln"/>
            </div>

			
			
        </div>
    </div>
	
	<div class="form-group">
	 
	 
        <div class="row">
		
            <div class="col-md-6">
                <label class="control-label">Contact Number:</label>
                <input type="text" class="form-control" required name="cn" id="cn"/>
            </div>

			<div class="col-md-6">
                <label class="control-label">Email:</label>
                <input type="text" class="form-control" required name="em" id="em"/>
            </div>
			
			
        </div>
    </div>
	
	<div class="form-group">
	 
	 
        <div class="row">
		
            <div class="col-md-12">
                <label class="control-label">Your Message:</label>
                <textarea class="form-control" required name="message" id="message" style="height:188px;"></textarea>
            </div>

			
			
			
        </div>
    </div>


<!---  PERSONAL INFORMATION Zipcode-->


<hr class="hr2"/>

<div class="form-group"> 
	  <div class="row">
            <div class="col-md-12">
                 <label class='control-label' for='id_title'> <span style="color:red">ADDRESS</span></label>
            </div>

       </div>
</div>
    <div class="form-group">
	 
	  
		
         
				<div class="col-md-6">	
				<div class="row">			
							<span class="h1_branches"><a href="pages/contact_map_bicutan.php" target="frameMap">Bicutan </a></span><br/>
							<b>Address:</b>   Bicutan, Taguig City 1631<br/>
							<b>Email:</b> kwakkwak@gmail.com / aaaaaa@gmail.com<br/>
							<b>Tel. no.:</b> (+632) 837-1925; /(+632) 839-0083; /(+632) 837-1333; / (+632) 837-2071 local 2382<br/>
							<b>Fax no. :</b> (+632) 839-0086<br/><br/>
				     		
				<hr class="hr2"/></div>
				
			
				<div class="row">			
							<span class="h1_branches"><a href="pages/contact_map_region1.php" target="frameMap">Region I </a></span><br/>
							<b>Address:</b>  DMMMSU-MLU Campus, San Fernando City, 2500, La Union<br/>
							<b>Email:</b> aaaa@gmail.com <br/>
							<b>Tel. no.:</b> (072) 888-3399<br/>
							<b>Fax no. :</b> (072) 700-2372<br/><br/>
				     		
				<hr class="hr2"/></div>
				
			
				
				
				 </div>	
				 
							
				
			<div class="col-md-6"><iframe style="border:solid silver 1px;border-radius:8px;" src="pages/contact_map_bicutan.php" id="frameMap" name="frameMap" width=100%; height=560></iframe></div>
	
 
			
			
        </div>
		
		

  
	
	
	
	<div class="form-group">

	
	<div class="row">
            <div class="col-md-6">
                 <div id="lblstatus1"></div>
			</div>
    </div>
	
	</div>
	
	
<hr class="hr2"/>

	  </div>


<!-------------------------   		 ------------------------->

	<!-- container --> </div>
	
	</div>	
			
	


</form>

 

			

		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bt/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bt/assets/js/ie10-viewport-bug-workaround.js"></script>
	
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/y_crud.js"></script>
		<script type="text/javascript" src="js/y_crud_template.js"></script>
		
</body>


</html>