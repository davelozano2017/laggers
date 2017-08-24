<?php
include "../../cn.php";
?>
<!DOCTYPE html>
<html lang="en">

	<head>

    
		
	</head>
<body>
<table width="100%" cellpadding=6 cellspacing=6>

	<tr>
		<td colspan=2>
	
			<div id="divnav" style="background:;">
				
				<input type="text" id="txtsearch" placeholder="Search" onkeyup="load_data('patient/y')" class="form-control"/>
				<br/>
				<div class='col-md-offset-5 col-md-5'>
				<input type="button" value="Add New" class="btn btn-sm btn-warning" onclick="AddY()"/>
				</div>
			</div>

			<div id="divadd" style="display: none;">
				<table width=100%>
					<tr><td colspan=2><b>New Record</b></td></tr>
					<tr>
						<td colspan=2>
						
							<table width=100% border=0>
						<tr><td class="table_field">Last Name:</td><td><input   required type="text" name="LN" id="LN" placeholder="Enter Last Name" class="form-control"></td></tr>
						<tr><td class="table_field">First Name:</td><td> <input   required type="text" name="FN" id="FN" placeholder="Enter First Name" class="form-control"/></td></tr>
						<tr><td class="table_field">Middle Name:</td><td> <input   required type="text" name="MN" id="MN" placeholder="Enter Middle Name" class="form-control"/></td></tr>
						<tr><td class="table_field">Suffix Name:</td><td> <input   required type="text" name="SN" id="SN" placeholder="Enter Suffix Name" class="form-control"/></td></tr>
						<tr><td class="table_field">Sex:</td><td> <select required name="text" id="GENDER" placgeholder="Enter Gender" class="form-control">
					
							<option/>
							<option>Male</option>
							<option>Female</option>
				
							</select></td></tr>
						<tr><td class="table_field">Birthday:</td><td> 
							<input  required type="date" name="BIRTHDAY" id="BIRTHDAY" placeholder="Enter Birthday" class="form-control"/>
    
						</td></tr>
						<tr><td class="table_field">Birthplace:</td><td> <input   required type="text" name="BIRTHPLACE" id="BIRTHPLACE" placeholder="Enter Birthplace" class="form-control"/></td></tr>
						<tr><td class="table_field">Nationality:</td><td> <input   required type="text" name="NATIONALITY" id="NATIONALITY" placeholder="Enter Nationality" class="form-control"/></td></tr>
						<tr><td class="table_field">Religion:</td><td> <input   required type="text" name="RELIGION" id="RELIGION" placeholder="Enter Religion" class="form-control"/></td></tr>	
						<tr><td class="table_field">Civil Status:</td><td> 
								<select required name="CIVILSTATUS" id="CIVILSTATUS" placeholder="Enter Civil Status" class="form-control">
								<option/>
								<option>Single</option>
								<option>Married</option>
								<option>Separated</option>
								<option>Widowed</option>
				
								</select>
						</td></tr>	
						<tr><td class="table_field">Height:</td><td> <input   required type="text" name="HEIGHT" id="HEIGHT" placeholder="Enter Height" class="form-control"/></td></tr>	
						<tr><td class="table_field">Weight:</td><td> <input   required type="text" name="WEIGHT" id="WEIGHT" placeholder="Enter Weight" class="form-control"/></td></tr>	
						<tr><td class="table_field">Blood Type:</td><td> <input   required type="text" name="BLOOD_TYPE" id="BLOOD_TYPE" placeholder="Enter bloodtype" class="form-control"/></td></tr>	
						<tr><td class="table_field">Contact Number:</td><td> <input   required type="text" name="CONTACT_NUMBER" id="CONTACT_NUMBER" placeholder="Enter Contact Number" class="form-control"/></td></tr>	
						<tr><td class="table_field">Email:</td><td> <input   required type="text" name="EMAIL" id="EMAIL" placeholder="Enter Email" class="form-control"/></td></tr>	
						<tr><td class="table_field">Address:</td><td> <input   required type="text" name="ADDRESS" id="ADDRESS" placeholder="Enter Address" class="form-control"/></td></tr>
						<tr><td class="table_field">Condominium:</td><td> <input   required type="CONDOMINIUM" name="ADDRESS" id="CONDOMINIUM" placeholder="Enter Condominium" class="form-control"/></td></tr>
						<tr><td class="table_field">Barangay:</td><td> <input   required type="text" name="BARANGAY" id="BARANGAY" placeholder="Enter Barangay" class="form-control"/></td></tr>
						<tr><td class="table_field">City:</td><td> <input   required type="text" name="CITY" id="CITY" placeholder="Enter City" class="form-control"/></td></tr>	
							
							</table>
						
						</td>
					</tr>
					
					
					
					

					<tr>
						<td align=center colspan=2>
							<input type="button" value="Save" onclick="SaveY('save')"/>
							<input type="button" value="Cancel" onclick="CancelY()"/>
			
						</td>
					</tr>
					<tr>
						<td align=center colspan=2>
							<div id="action_status"></div>
						</td>
					</tr>
				</table>
			</div>

			<div id="divdata">
			</div>

		</td>
	</td>
</table>

<center>
	<div id="divdelete" style="display: none;">
		<div>
			Are you sure you want to delete?<br/><br/>
			<input type="button" value="Yes" onclick="GoDeleteY()"/>
			<input type="button" value="Cancel" onclick="DeleteNoY()"/>
			<br/><span id="divdeletestatus"></span>
		</div>
	</div>
	
	<div id="divfiles" onclick="$('#divfiles').hide()">
		<div>
			
		</div>
	</div>
</center>
</body>
</html>