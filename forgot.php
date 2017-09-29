<?php

include "cn.php";

		
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
		<a class="navbar-brand" href="#">Kwak KWak Hospital</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="button" value="Submit" onclick="forgotvalidate();" class="btn btn-warning"/>
            </div>
            <div class="form-group">
               <a style="cursor:pointer;color:white;" href="pages/logout.php"><input type="button" value="Cancel" class="btn btn-warning"/></a></td>
            </div>
            <div class="form-group">
              <span id="lbltextstatus" style="color:orange"></span>
            </div>
			
          </form>
        </div><!--/.navbar-collapse -->
      </div>
	  
    </nav>
	
     <div class="container">	
	 

	
			
		<div class="panel panel-primary">
				 <div class="panel_title" id="div_title"></div>
				<div  class="panel-body">
				
				
  
      <div style="line-height:1%;">
			<br>
			<a href="" ><img src="img/logo1.png" class="left-block img-responsive" style="width:88px; height:88px;"/></a> 
		</div>
	   
		<div style="line-height:1%;">
			</br>
			 <h5><b>Kwak KWak Hospital</b></h5>
			<h5>You may contact us at (632)888888 or email us at  @gmail.com</h5>
			
			</div>
		 </br>
			 
		
			
			 
<hr class="hr2"/>
<form>

<div class="form-group"> 
	  <div class="row">
            <div class="col-md-12">
                 <label class='control-label' for='id_title'> <span style="color:red">FORGOT PASSWORD</span></label>
            </div>

       </div>
</div>

 
<div id='forgot2'>
  <div class="form-group">
	 
	  <div class="row">
		
            <div class="col-md-3">
                 <label class='control-label' for='id_title'><span style="color:red">*</span>1. Username:</label>
				<input type="text" name="usern" id="usern" class="form-control"/>
            </div>
		
			
			
        </div>
        
</div>
	
	

	

	
	<div class="form-group">
	 
	  <div class="row">
		
            <div class="col-md-3">
                 <label class='control-label' for='id_title'><span style="color:red">*</span>2. Security Question 1:</label>
				<select name="sq1" id="sq1" class="form-control">
				<option/>
				<option>What is your pet name?</option>
				<option>In what year was your father born?</option>
				<option>What is your favorite food?</option>
				</select>
            </div>
			
			<div class="col-md-3">
                 <label class='control-label' for='id_title'><span style="color:red">*</span>Answer:</label>
				<input type="password" name="sq1ans" id="sq1ans" class="form-control"/>
            </div>
         
        </div>
        
	</div>
	
	<div class="form-group">
	 
	  <div class="row">
		
            <div class="col-md-3">
                 <label class='control-label' for='id_title'><span style="color:red">*</span>3. Security Question 2:</label>
				<select name="sq2" id="sq2" class="form-control">
				<option/>
				<option>What is your nickname?</option>
				<option>In what year was your mother born?</option>
				<option>What is your favorite color?</option>
				</select>
            </div>
			
			<div class="col-md-3">
                 <label class='control-label' for='id_title'><span style="color:red">*</span>Answer:</label>
				<input type="password" name="sq2ans" id="sq2ans" class="form-control"/>
            </div>
         
        </div>
        
	</div>
	

	
</div> 




<hr class="hr2"/>


  
	
	
	
	<div class="form-group">

	
	<div class="row">
            <div class="col-md-6">
                 <div id="lblstatus1" hidden></div>
			</div>
    </div>
	
	</div>
	
	
	
	


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