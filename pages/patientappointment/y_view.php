<?php
session_start();
$form_name = "patientappointment";

include "../../cn.php";

					
?>
<!DOCTYPE html>
<html lang="en">

	<head>

    
		
	</head>
<body>
<table border=0 width=100%>
	<tr>
		<th colspan="7" align=left>Number of Records: 0</th>
	</tr>
	<?php
	$count = 0;
	
		?>
		<tr>
			<td>
				<div class="div_data_view">
					</br>
				
					
					<table width=100% border=0>
						
		
					</table>
					
				</div>
			</td>
		</tr>

</table>

<input type="hidden" id="txtnoofrecords" value="0" />
<div id="green" style="margin: 0px;padding:0px;width:100%;"></div>
</body>
</html>