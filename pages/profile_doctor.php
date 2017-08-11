<?php
session_start();
include "../cn.php";
$form_name = "Profile";

$sql = "Select * From doctor Where email = '".$_SESSION['session_email']."'";
if ($qi = $pdo->query($sql)) { 
 $d = $qi->fetch( PDO::FETCH_ASSOC ); }

 $sql2 = "Select * From user Where fid = '".$_SESSION['session_iid']."'";
 if ($qi2 = $pdo->query($sql2)) { 
  $d2 = $qi2->fetch( PDO::FETCH_ASSOC ); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<style>
.lineSeparator{
	border-top:dotted silver 2px;
	height:1px;
}
</style>
</head>

<body>



<center>

<div>
<hr class="hr2"/><br/>
        <form class='form-horizontal' role='form'>
		<div class='form-group'>
		 <div class='col-md-offset-4 col-md-5'><b>DOCTOR INFORMATION</b></div>
		</div>
		 <div class='form-group'>
			<label class='control-label col-md-4 col-md-offset-0' for='lname'>Last Name:</label>
			<div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input  value="<?php  echo $d['LN'];?>" required type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control">
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='fname'>First Name:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                   <input disabled  value="<?php echo $d['FN'];?>" required type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Middle Name:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  value="<?php echo  $d['MN'];?>" required type="text" name="mname" id="mname" placeholder="Enter Middle Name" class="form-control"/>
                </div>
              </div>
			</div>
			
		
			
				<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Suffix Name:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  value="<?php echo  $d['SN'];?>" required type="text" name="sname" id="sname" placeholder="Enter Suffix Name" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Gender:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input disabled value="<?php echo  $d['GENDER'];?>" required type="text" name="gender" id="gender" placeholder="Enter Gender" class="form-control"/>
                </div>
              </div>
			</div>
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Years of Service:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  value="<?php echo  $d['YEARS'];?>" required type="text" name="years" id="years" placeholder="Enter Suffix Name" class="form-control"/>
                </div>
              </div>
			</div>
			
			
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Contact Number:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  value="<?php echo  $d['CN'];?>" required type="text" name="cn" id="cn" placeholder="Enter Weight" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Email:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input  value="<?php echo  $d['email'];?>" required type="text" name="email" id="email" placeholder="Enter Weight" class="form-control"/>
                </div>
              </div>
			</div>
			

			
			
			
		
		</div>
			<div class='form-group'>
            <div class='col-md-offset-4 col-md-5'>
             <input type="button" value="Update Profile" onclick="UpdateDoctorProfile()" class="btn btn-sm btn-warning" />
            </div> 
			<div class='col-md-offset-4 col-md-5'>
             <div id="lblupdatestatus"></div>
            </div>
			
			</div>
			
		<hr class="hr2"/><br/>
		<div class='form-group'>
		 <div class='col-md-offset-4 col-md-5'><b>ACCOUNT INFORMATION</b></div>
		</div>
		
		<div class='form-group'>

		<label class='control-label col-md-4 col-md-offset-0' for='lname'>Username:</label>
			<div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input disabled value="<?php echo $d2['UN'];?>" required type="text" name="un" id="un" placeholder="Enter Username" class="form-control">
                </div>
              </div>
			</div>
			
		<label class='control-label col-md-4 col-md-offset-0' for='lname'>Old Password:</label>
			<div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input required type="password" name="txtold" id="txtold" placeholder="Enter Old Password" class="form-control">
                </div>
              </div>
			</div>
			
		<label class='control-label col-md-4 col-md-offset-0' for='lname'>New Password:</label>
			<div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input required type="password" name="txtnew" id="txtnew" placeholder="Enter New Password" class="form-control">
                </div>
              </div>
			</div>
			
		<label class='control-label col-md-4 col-md-offset-0' for='lname'>Confirm Password:</label>
			<div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input required type="password" name="txtcnew" id="txtcnew" placeholder="Re-type Password" class="form-control">
                </div>
              </div>
			</div>
		
		</div>
			<div class='form-group'>
            <div class='col-md-offset-4 col-md-5'>
             <input type="button" value="Change Password" onclick="ChangeDoctorPassword()" class="btn btn-sm btn-warning" />
            </div> 
			<div class='col-md-offset-4 col-md-5'>
             <div id="action_status"></div>
            </div>
			
			</div>
			
			
		</form>
		
	
						
							
				</div>
			



</center>
</body>
</html>