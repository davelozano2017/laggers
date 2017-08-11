<?php
session_start();
$form_name = "patientpending";

include "../../cn.php";

$q = "select patient.*, user.st from patient, user where user.st ='Not Yet Verified' and user.fid=patient.id";			

$stmt  = $pdo->query($q);
$result = $stmt->fetchAll();
					
?>
<!DOCTYPE html>
<html lang="en">

	<head>

    
		
	</head>
<body>
<table border=0 width=100%>
	<tr>
		<th colspan="7" align=left>Number of Records: <?php echo $stmt->rowCount();?></th>
	</tr>
	<?php
	$count = 0;
	foreach( $result as $d ) {
		$count = $count + 1;
		$tbl_id = $d['id'];
		?>
		<tr>
			<td>
				<div class="div_data_view">
					</br>
					<div class="div_button_actions">
						<span class="span_count"><i>User Awaiting Approval #: <?php echo $count;?></i></span>
						<span class="label label-default" onclick="DeleteY('<?php echo $tbl_id;?>')" title="Delete">Delete</span>
						<span class="label label-default" onclick="UpdateY('<?php echo $tbl_id;?>')" title="Save Changes">Verify User</span>

						<span class="span_update_status" id="span_update_status<?php echo $tbl_id;?>"></span>
					</div>
					
					<table width=100% border=0>
							<tr><td class="table_field">Last Name:</td><td><input id="<?php echo $form_name;?>LN<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['LN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">First Name:</td><td><input id="<?php echo $form_name;?>FN<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['FN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Middle Name:</td><td><input id="<?php echo $form_name;?>MN<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['MN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Suffix Name:</td><td><input id="<?php echo $form_name;?>SN<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['SN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Birthday:</td><td><input id="<?php echo $form_name;?>BIRTHDAY<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['BIRTHDAY'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Contact Number:</td><td><input id="<?php echo $form_name;?>CONTACT_NUMBER<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['CONTACT_NUMBER'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Email:</td><td><input id="<?php echo $form_name;?>EMAIL<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['EMAIL'];?>" class="form-control"/></td></tr>
						</table>
					
				</div>
			</td>
		</tr>
		<?php
	}
	?>
</table>

<input type="hidden" id="txtnoofrecords" value="<?php echo $stmt->rowCount();?>" />
<div id="green" style="margin: 0px;padding:0px;width:100%;"></div>
</body>
</html>