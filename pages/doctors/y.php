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

<input type="text" id="txtsearch" placeholder="Search" onkeyup="load_data('doctors/y')" class="form-control"/>
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
			<tr><td class="table_field">Last Name:</td><td>
			<input id="LN" style="width:100%;" type="text"  class="form-control"/>
			</td></tr>
			<tr><td class="table_field">First Name:</td><td>
			<input id="FN" style="width:100%;" type="text" class="form-control"/>
			</td></tr>
			<tr><td class="table_field">Middle Name:</td><td>
			<input id="MN" style="width:100%;" type="text"  class="form-control"/>
			</td></tr>
			<tr><td class="table_field">Suffix Name:</td><td>
			<input id="SN" style="width:100%;" type="text"  class="form-control"/>
			</td></tr>
			<tr><td class="table_field">Sex:</td><td>
			<input id="GENDER" style="width:100%;" type="text"  class="form-control"/>
			</td></tr>
			<tr><td class="table_field">Year of Service:</td><td><input id="YEARS" style="width:100%;" type="text"  class="form-control"/></td></tr>

	<tr>
		<td class="table_field">Specialization:</td>
		<?php 
		$query = $pdo->query("SELECT * FROM specialization");
		$result = $query->fetchAll(); 
		?>
		<td>
		<select name="specialization" id="SPECIALIZATION" class="form-control">
				<option value="" selected></option>
			<?php foreach ($result as $row): ?>
				<option value='<?php echo $row['specialization']?>'><?php echo $row['specialization']?></option>
			<?php endforeach;?>
		</select>
		
		
		</td>
	</tr>

	<tr><td class="table_field">Contact Number:</td><td><input id="CN" style="width:100%;" type="text"  class="form-control"/></td></tr>
	<tr><td class="table_field">Email:</td><td><input id="email" style="width:100%;" type="text" class="form-control"/></td></tr>

	<tr><td class="table_field">Username:</td><td><input id="username" type="text" class="form-control"/></td></tr>

	<tr><td class="table_field">Password:</td><td><input id="password" pattern="" type="password" class="form-control" required/></td></tr>
	
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
