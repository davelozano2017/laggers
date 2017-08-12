<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo1.png">

    <title>Online Appointment</title>

    <!-- Bootstrap core CSS -->
    <link href="bt/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->	
    <link href="bt/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index2.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bt/assets/js/ie-emulation-modes-warning.js"></script>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]
	
		
		<link rel="stylesheet" href="css/index.css"/>
		<link rel="stylesheet" href="css/button.css"/>
		<link rel="stylesheet" href="css/radio.css"/>
		<link rel="stylesheet" href="css/checkbox.css"/>
		<link rel="stylesheet" href="css/combo.css"/>
		<link rel="stylesheet" href="css/scrollbar.css"/>
		<link rel="stylesheet" href="css/content.css"/>
		<link rel="stylesheet" href="css/hr.css"/>
		<link rel="stylesheet" href="css/panel.css"/>-->
		
		<!--<link href="includes/select2-3.5.1/select2.css" rel="stylesheet"/>
		<script src="includes/select2-3.5.1/select2.js"></script>
		-->
		
		<style>
.panel{
	 
-webkit-box-shadow: 0px 5px 8px 0px rgba(50, 50, 50, 0.46);
	-moz-box-shadow:    0px 5px 8px 0px rgba(50, 50, 50, 0.46);
	box-shadow:         0px 5px 8px 0px rgba(50, 50, 50, 0.46);
  border-radius: 5px;
    border:solid lightblue 2px;
	
}		
		
.panel-body{
	
}

.list-group a label{
	
	cursor:pointer;
	color:white;
	
}
.list-group a:hover{
	
	background-image:url(img/nav_bg_hover.png);
	color:orange;
	text-decoration: none;
	font-weight: bold;
}

.panel-body img{
	width:28px;
}

.list-group a{
	background:white;
	padding:8px;
	display:block;

	margin:4px;
	text-decoration: none;
	border-radius:4px;
	
	-webkit-box-shadow: rgba(0,0,0,.1) 1px 2px 2px;
	-moz-box-shadow: rgba(0,0,0,.1) 1px 2px 2px;
	box-shadow: rgba(0,0,0,.1) 1px 2px 2px;
	text-align:left;
	
	
	background-image:url(img/nav_bg.png);
	color:white;
}

.list-group-items.active{
	
	
	background-image:url(img/nav_bg_hover.png);
	color:orange;
}
</style>
	</head>
<body>

<?php if(isset($_SESSION['session_iid'])){ ?>		



			
			<?php if(isset($_SESSION['session_i'])){ ?>
			


			

      <div class="row row-offcanvas row-offcanvas-left">
	        <div class="col-xs-6 col-sm-4 sidebar-offcanvas" id="sidebar">
		<div class="panel panel-primary">
		<?php
		if($_SESSION['session_itype']!="Administrator"){ 
		?>
				 <div class="panel_title">Patient</div>
		<?php
		}else{ 
		?>		 
				 <div class="panel_title" >Administrator</div>
		<?php
		} 
		?>			
				 <div class="panel-body" style="background: linear-gradient(to bottom, #eeeeef 0%, #c7c7cb 98%); background-image: -webkit-gradient(linear, left top, left bottom, from(#eeeeef), to(#98));
  background-image: -webkit-linear-gradient(top, #eeeeef 0%, #c7c7cb 98%);
  background-image:      -o-linear-gradient(top, #eeeeef 0%, #c7c7cb 98%);">
				<div  class="list-group" >
			
		
    
		  
		  	<?php 
	if(isset($_SESSION['session_i'])){ 
		if($_SESSION['session_itype']=="Patient"){

		
	?>

		

	
            <a href="#" onclick="show_page('profile','0')" >Personal Information</a>
            <a href="appointment.php">View Appointments</a>
            <a href="my_history.php">My History</a>
						<a href="billing.php">Billing</a>
            <a href="pages/logout.php" >Logout</a>
			
			
			

		 
<?php
				
				
				}elseif ($_SESSION['session_itype']=="Administrator"){
	?>
			<hr class="hr2" style="margin:0px"/>
			<a onclick="show_page('profile_admin','0')" >Profile</a>
			<a onclick="show_page('visits','0')" class="list-group-items">Logins</a>
			<a onclick="show_page('count_appointment','0')" class="list-group-items">Total Appointments</a>
		   <a onclick="show_page('patientpending/y','1')" class="list-group-items">Patient Permission</a>
		   <hr class="hr2" style="margin:0px"/>
		    <a onclick="show_page('doctors/y','1')" class="list-group-items">Doctors</a>
			<a onclick="show_page('patient/y','1')" class="list-group-items">Patients</a>
			<a onclick="show_page('profile_admin','0')" class="list-group-items">Admins</a>
			<a onclick="show_page('add_specialization_view','0')" class="list-group-items">Add Specialization</a>
			<hr class="hr2" style="margin:0px"/>
           <a onclick="show_page('news/y','1')" >Edit News/Annoucement</a>
           <a href="main.php?p=editor&id=1" >Edit About Hospital</a>
			<hr class="hr2" style="margin:0px"/>
           <a  href="pages/logout.php">Logout</a>

	
	<?php			
		}elseif ($_SESSION['session_itype']=="Doctor"){
			
	?>
	   <a  onclick="show_page('profile_doctor','0')" >Doctor Information</a>
	   <a href="my_availability.php">My Availability</a>
	   <a href="view_appointment.php">View Appointment</a>
	   <a href="patient_history.php">Patient History</a>
		 <a href="generate_report.php" >Generate Report</a>
		 <a href="my_uploads.php" >My Uploads</a>
     <a href="pages/logout.php" >Logout</a>
	
	<?php			
	}}
			
	?>
	</br>
	</br>
	</div>
      <!--/.sidebar-offcanvas-->
				</div>	
		</div>
      </div><!--/row-->
        <div class="col-xs-12 col-sm-8">
          <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><<<</button>
          </p>
            <div class="panel panel-primary">
				 <div class="panel_title" id="div_title"></div>
				<div  class="panel-body" id="leftcontent">
				
				</div>	
			</div> 
          <div class="row">
            <div class="col-xs-6 col-lg-4">
             
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
             
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
             
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
             
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
            
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
             
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


</div>
      <hr>
		<center>
      <footer>
        <p> 2017</p>
      </footer>
		</center>
				
		

			
			<?php } ?>
					

		
		
		
			
			
		

		
			
			




<?php }else{ ?>
	
	      <div class="row row-offcanvas row-offcanvas-left">
	        <div class="col-xs-6 col-sm-4 sidebar-offcanvas" id="sidebar">
		<div class="panel panel-primary">
		
				 <div class="panel_title">Login</div>
			 		
				 <div class="panel-body" style="background: linear-gradient(to bottom, #eeeeef 0%, #c7c7cb 98%); background-image: -webkit-gradient(linear, left top, left bottom, from(#eeeeef), to(#98));
  background-image: -webkit-linear-gradient(top, #eeeeef 0%, #c7c7cb 98%);
  background-image:      -o-linear-gradient(top, #eeeeef 0%, #c7c7cb 98%);">
				<div  class="list-group" >
			
		
    
		  

 <form class='form-horizontal' role='form' method="POST" action="login.php">
		  <div style="line-height:1%;">
			<br>
		<img src="img/1.png" class="center-block img-responsive" style="width:108px; height:108px;"/>
		</div>
	   
	
		 </br>
          <div class='form-group'>
		    <div class="row">
            <label class='control-label col-md-3 col-md-offset-1' for='lname'>Username:</label>
			<div class='col-md-8'>
              <div class='form-group'>
                <div class='col-md-11'>
                   <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                </div>
              </div>
			</div>
			</div>
			
			<div class="row">
			<label class='control-label  col-md-3 col-md-offset-1' for='fname'>Password:</label>
			<div class='col-md-8'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                </div>
              </div>
			</div>
			</div>
			
			<div class="row">
            <div class='col-md-offset-4 col-md-12'>
			<button type="submit" name="btn-login" class="btn btn-warning">Sign in</button>
            </div>
			
			
			
        
			
			</div>
			
		
			
        
			
		
	
          </div>
		  

        </form>
		

	
	</br>
	</br>
	</div>
	<center><a href="forgot.php" role="button">Click Here if you forget your Password</a></center>
	
      <!--/.sidebar-offcanvas-->
				</div>	
		</div>
      </div>
	  <!--/row-->
        <div class="col-xs-12 col-sm-8">
          <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><<<</button>
          </p>
            <div class="panel panel-primary">
				 <div class="panel_title" id="div_title"></div>
				<div  class="panel-body" id="leftcontent">
<div id="main">
<hr class="hr2"/><br/>

		
	
	<div class="jumbotron">
     <div class="container">
	
		<img src="img/1.png" class="center-block img-responsive" style="width:108px; height:108px;"/>
        <h1>Welcome!</h1>
		
        <p style="text-align:justify">The system that is to be develop by Lagger's Lane from Jose Rizal University in partial fulfillment of IT Project 2 under the supervision of Mr. Israel Cariño and Mr. Billy Jay Angeles. This will provide an accurate and effective Online Appointment System with Billing & Patient Information System for Medical Facilities.</p>
        <p>
		<a onclick="newas()" class="btn btn-lg btn-warning"  role="button">Click Here to Signup... &raquo;</a></p>
      </div>
    </div>
						
<hr class="hr2"/><br/>		


<div class="row">
       <center>
        <div class="col-md-12">
          <h2>News / Announcement</h2>

		  <p style="text-align:center">If you have any concerns or suggestions please feel free to message us:</p>
		  <p style="text-align:center">Just click on the "Message Us" button or email us at laggerslane@gmail.com. Thank you.</p>
          <p><a class="btn btn-sm btn-primary" href="index.php?p=news" role="button">View details <span class="badge">1</span> &raquo;</a></p>
		</div>
       </center>
</div>					

<hr class="hr2"/><br/>	
<div class="row">
       <center>
        <div class="col-md-12">
          <h2>Contact Us</h2>
			<p style="text-align:center">Contact Number:  09898888888</p>
		   <p style="text-align:center">Address:  Shaw Blvd., Mandaluyong</p>
		  <p style="text-align:center">Email: laggerslane@gmail.com</p>


          <p><a class="btn btn-sm btn-primary" href="index.php?p=message" role="button">Message us &raquo;</a></p>
		</div>
       </center>
</div>
	

<hr class="hr2"/><br/>	
<div class="row">
       <center>
        <div class="col-md-12">
          <h2>Links</h2>
		
		
		

			
				<a href="https://www.facebook.com/rap.deborja?ref=br_rs" target="_blank"><img src="img/social/fb.png" style="height:38px; width:38px;"/></a>
				<a href="https://twitter.com/MochaUson" target="_blank"><img src="img/social/twit.png" style="height:38px; width:38px;"/></a>

		
		</div>
       </center>
</div>
</div>	

<div id="new" style="display:none">
<form class='form-horizontal' role='form'>
		<div class='form-group'>
		 <div class='col-md-offset-4 col-md-5'> <span style="color:red"><b>PERSONAL INFORMATION</b></span></div>
		</div>
		</br>

		 <div class='form-group'>
			<label class='control-label col-md-4 col-md-offset-0' for='lname'>Last Name:</label>
			<div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input   required type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control">
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='fname'>First Name:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                   <input   required type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Middle Name:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="mname" id="mname" placeholder="Enter Middle Name" class="form-control"/>
                </div>
              </div>
			</div>
			
		
			
				<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Suffix Name:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="sname" id="sname" placeholder="Enter Suffix Name" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Gender:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  
				  <select required name="text" id="gender" placgeholder="" class="form-control">
					
				<option/>
				<option>Male</option>
				<option>Female</option>
				
				
				</select>
				  
                </div>
              </div>
			</div>
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Birthday:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="date" name="bday" id="bday" placeholder="Enter Birthday" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Birthplace:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="bplace" id="bplace" placeholder="Enter Birthplace" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Nationality:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="nat" id="nat" placeholder="Enter Nationality" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Religion:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="rel" id="rel" placeholder="Enter Religion" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Civil Status:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
				<select required name="cstat" id="cstat" placeholder="Enter Civil Status" class="form-control">
					
				<option/>
				<option>Single</option>
				<option>Married</option>
				<option>Separated</option>
				<option>Widowed</option>
				
				</select>
                 
                </div>
              </div>
			</div>
               
            <label class='control-label  col-md-4 col-md-offset-0' for='mname'>Height:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="height" id="height" placeholder="Enter Height" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Weight:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="weight" id="weight" placeholder="Enter Weight" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Blood Type:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="bloodtype" id="bloodtype" placeholder="Enter Blood Type" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Contact Number:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="cn" id="cn" placeholder="Enter Contact Number" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Email:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="email" id="email" placeholder="Enter Email" class="form-control"/>
                </div>
              </div>
			</div>
			
			
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Zipcode:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="zipcode" id="zipcode" placeholder="Enter Zipcode" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Address:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="ad" id="ad" placeholder="Enter Address" class="form-control"/>
                </div>
				
              </div>
			  
			</div>
			

			
		
			
			
	
		
		
		
		</div>	<hr class="hr2"/>	 

		<div class='form-group'>
		 <div class='col-md-offset-4 col-md-5'> <span style="color:red"><b>ACCOUNT INFORMATION</b></span></div>
		</div>


		
		<div class='form-group'>
		 <label class='control-label' for='id_title'> <span ><i>Please provide your username and password which you can use to access and update your information.</i> </span></label>
		</div>
		</br>
		
	
	<div class='form-group'>
	<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Username:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="text" name="usern" id="usern" placeholder="Enter Username" class="form-control"/>
                </div>
				
              </div>
			  
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Password:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="password" name="passw" id="passw" placeholder="Enter Password" class="form-control"/>
                </div>
				
              </div>
			  
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Re-type Password:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  required type="password" name="retypepassw" id="retypepassw" placeholder="Re-type Password" class="form-control"/>
                </div>
				
              </div>
			  
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Security Question 1:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                 <select name="sq1" id="sq1" class="form-control">
				<option/>
				<option>What is your pet name?</option>
				<option>In what year was your father born?</option>
				<option>What is your favorite food?</option>
				</select>
                </div>
				
              </div>
			  
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Answer:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                 <input type="text" name="sq1ans" id="sq1ans" class="form-control" placeholder="Enter Answer"/>
                </div>
				
              </div>
			  
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Security Question 2:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                <select name="sq2" id="sq2" class="form-control">
				<option/>
				<option>What is your nickname?</option>
				<option>In what year was your mother born?</option>
				<option>What is your favorite color?</option>
				</select>
                </div>
				
              </div>
			  
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Answer:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                 <input type="text" name="sq2ans" id="sq2ans" class="form-control" placeholder="Enter Answer"/>
                </div>
				
              </div>
			  
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Recovery Email:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                 <input type="text" name="remail" id="remail" class="form-control" placeholder="Enter Recovery Email"/>
                </div>
				
              </div>
			  
			</div>
	</div>
		
		

		
		
       	<div class='form-group'>
            <div class='col-md-offset-5 col-md-5'>
             <input type="button" value="Submit" onclick="Validate();" class="btn btn-sm btn-warning" />
            </div> 
			<div class='col-md-offset-5 col-md-5'>
             <div id="lblstatus1"></div>
            </div>
			<div class='col-md-offset-5 col-md-5'>
             <div id="lblugrad"></div>
            </div>
			<div class='col-md-offset-5 col-md-5'>
             <div id="lblstatusaccount"></div>
            </div>
			<div class="row" hidden>
            <div class="col-md-6">
                <input type="text" name="lbll" id="lbll" />
			</div>
    </div>
			</div>
	
</form>


   </div>
</div>
				</div>	
			</div> 
          <div class="row">
            <div class="col-xs-6 col-lg-4">
             
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
             
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
             
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
             
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
            
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
             
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->


</div>
      <hr>
		<center>
      <footer>
        <p> 2017</p>
      </footer>
		</center>
<script type="text/javascript">var inFormOrLink;
$('a').on('click', function() { inFormOrLink = true; });
$('form').on('submit', function() { inFormOrLink = true; });

$(window).on("beforeunload", function() { 
    return inFormOrLink ? "Do you really want to close?" : null; 
}) </script>
<?php } ?>
 


  </body>
</html>