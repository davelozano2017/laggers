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
				
				<input type="text" id="txtsearch" placeholder="Search" onkeyup="load_data('patientpending/y')" class="form-control"/>
				<br/>
				
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