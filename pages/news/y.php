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
				<a  href="main.php?p=editor&id=0"><input type="button" value="+"/></a>
				<input type="text" id="txtsearch" placeholder="Search" onkeyup="load_data('news/y')" style="width:80%;"/>
				<br/><br/>
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




		
     
		  <div id="divnav">
	
		 
				<input type="text" id="txtsearch" placeholder="Search" onkeyup="load_data('news/y')"   class="form-control"/>
				<br/>
		  	  <div class='col-md-offset-5 col-md-5'>
				<a  href="main.php?p=editor&id=0"><input type="button" value="Add New" class="btn btn-sm btn-warning"/></a>
			  </div>
			
		  </div>
		  	<br/><br/>
			
		  <div id="divdata">
		  </div>
		
		 
	
		 
	

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

</body>
</html>