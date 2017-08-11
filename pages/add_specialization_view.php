<?php
session_start();
$form_name = "specialization";
include "../cn.php";
$query = $pdo->query("SELECT * FROM specialization");
$result1 = $query->fetchAll(); 
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
		
		<br/>
		<div class='col-md-offset-5 col-md-5'>
		<input type="button" id="addnew" value="Add New" class="btn btn-sm btn-warning" onclick="AddY()"/>
		</div>
	</div>

	<div id="divadd" style="display: none;">
		<table width=100%>
			<tr><td colspan=2><b>New Record</b></td></tr>
			<tr>
				<td colspan=2>
				
					<table width=100% border=0>
                    <tr><td class="table_field">Specialization:</td>
					<td>
						<input id="specialization"  type="text"  class="form-control"/>
					</td></tr>
					</table>
				
				</td>
			</tr>

			<tr>
				<td align=center colspan=2>
					<input type="button" value="Save" onclick="AddSpecialization()"/>
					<input type="button" value="Cancel" onclick="hidediv()"/>
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

<table border=0 width=100%>
	<?php
	$count = 0;
	foreach( $result1 as $d ) {
		$count = $count + 1;
		$tbl_id = $d['id'];
		?>
		<tr>
			<td>
				<div class="div_data_view">
					</br>
					<div class="div_button_actions">
						<span class="span_count"><i>Doctor Record #: <?php echo $count;?></i></span>
						<span class="label label-default" onclick="DeleteY('<?php echo $tbl_id;?>')" title="Delete">Delete</span>
						<span class="label label-default" onclick="UpdateSpecialization('<?php echo $tbl_id;?>')" title="Save Changes">Save Changes</span>
						<span class="span_update_status" id="span_update_status<?php echo $tbl_id;?>"></span>
					</div>
					
					<table width=100% border=0>
						
						<tr>
						<td class="table_field">Specialization:</td>
						<td>
						<input id="specialization<?php echo $tbl_id;?>" type="text" value="<?php echo $d['specialization'];?>" class="form-control"/>
						</td>
						
					</table>
					
				</div>
			</td>
		</tr>
		<?php
	}
	?>
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