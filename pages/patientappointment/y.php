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
								<tr><td class="table_field">Description:</td><td><input   required type="text" name="desc" id="desc" placeholder="Enter Description" class="form-control"></td></tr>
							<tr><td class="table_field">Appointment Date:</td><td> 
							<input  required type="date" name="appdate" id="appdate" placeholder="Enter Birthday" class="form-control"/>
    
						</td></tr>
						
						<tr><td class="table_field">Doctor:</td><td> <input   required type="text" name="doctor" id="doctor" placeholder="Enter Doctor" class="form-control"/></td></tr>	
							
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