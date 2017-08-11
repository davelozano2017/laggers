<?php
session_start();
include "../function/enc.php";
include "../cn.php";

$sql = "Select * From employee Where id = '".$_SESSION['session_iid']."'";
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
</head>

<body>
<center>
 	


   
      <hr class="hr2"/><br/>
        <form class='form-horizontal' role='form'>
		
          <div class='form-group'>
            <label class='control-label col-md-4 col-md-offset-0' for='lname'>Last Name:</label>
			<div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input value="<?php echo $d['LN'];?>" required type="text" name="lname" id="lname" placeholder="Enter Last Name" class="form-control">
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='fname'>First Name:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                   <input  value="<?php echo $d['FN'];?>" required type="text" name="fname" id="fname" placeholder="Enter First Name" class="form-control"/>
                </div>
              </div>
			</div>

			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Middle Name:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input value="<?php echo $d['MN'];?>" required type="text" name="mname" id="mname" placeholder="Enter Middle Name" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='mname'>Suffix Name:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input value="<?php echo $d['SN'];?>" required type="text" name="sname" id="sname" placeholder="Enter Suffix Name" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='ds'>Designation:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input value="<?php echo $d['POSITION'];?>" required type="text" name="pos" id="pos" placeholder="Enter Designation" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='ds'>Department:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input value="<?php echo $d['DEPARTMENT'];?>" required type="text" name="dept" id="dept" placeholder="Enter Designation" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='cn'>Contact Number:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                 <input value="<?php echo $d['CN'];?>" required type="text" name="cn" id="cn" placeholder="Enter Contact Number" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label  col-md-4 col-md-offset-0' for='email'>Email:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                 <input value="<?php echo $d['EMAIL'];?>" type="text" name="email" id="email" placeholder="Enter Email Address" class="form-control"/>
                </div>
              </div>
			</div>
			
			<div class='form-group'>
            <div class='col-md-offset-4 col-md-5'>
             <input type="button"  value="Update Profile" onclick="UpdateAdminProfile()" class="btn btn-sm btn-warning"/>
            </div>
			<div class='col-md-offset-4 col-md-5'>
             <div id="lblupdatestatus"></div>
            </div>
			
			</div>
          </div>
		  

        </form>
		
		
            
   <hr class="hr2"/><br/>
  
       
     <form class='form-horizontal' role='form'>
	 
			
          <div class='form-group'>
			
			
			
			
            <label class='control-label col-md-4 col-md-offset-0' for='un'>Username:</label>
			<div class='col-md-6'>
              <div class='form-group'>
                <div class='col-md-11'>
                  <input type="text" id="un" value="<?php  echo $d2['UN'];?>" placeholder="Enter Username" class="form-control"/>
                </div>
              </div>
			</div>
			
			<label class='control-label col-md-4 col-md-offset-0' for='txtold'>Old Password:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                   <input type="password" id="txtold" placeholder="Enter Old Password" class="form-control" required />
                </div>
              </div>
			</div>

			<label class='control-label col-md-4 col-md-offset-0' for='txtnew' >New Password:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                 <input type="password" id="txtnew" placeholder="Enter New Password" class="form-control" required />
                </div>
              </div>
			</div>
			
			<label class='control-label col-md-4 col-md-offset-0' for='txtcnew'>Confirm Password:</label>
			<div class='col-md-6'>
			  <div class='form-group'>
                <div class='col-md-11'>
                  <input type="password" id="txtcnew" placeholder="Re-Type Password" class="form-control" required />
                </div>
              </div>
			</div>
			
			<div class='form-group'>
            <div class='col-md-offset-4 col-md-5'>
             <input type="button" value="Change Password" onclick="ChangeAdminPassword()" class="btn btn-sm btn-warning" />
            </div> 
			<div class='col-md-offset-4 col-md-5'>
             <div id="action_status"></div>
            </div>
			
			</div>
			
		
          </div>
		  

        </form>
  </center>

</body>
</html>