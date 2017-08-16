<?php
session_start();
$form_name = "doctors";

include "../../cn.php";
$q = "SELECT * FROM doctor WHERE LN LIKE '%".$_GET['search']."%' OR 
					FN LIKE '%".$_GET['search']."%' OR 
					MN LIKE '%".$_GET['search']."%' OR 
					SN LIKE '%".$_GET['search']."%' OR 
					GENDER LIKE '%".$_GET['search']."%' OR 
					CN LIKE '%".$_GET['search']."%' OR 
					email LIKE '%".$_GET['search']."%' OR 
					YEARS LIKE '%".$_GET['search']."%'";			

$stmt  = $pdo->query($q);
$result = $stmt->fetchAll();
$query = $pdo->query("SELECT * FROM specialization");
$result1 = $query->fetchAll(); 
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
		$email = $d['email'];
		$query = $db->query("SELECT * FROM user WHERE EMAIL = '$email'");
		$row = $query->fetch_object();
        $attempts = $row->attempts;
		?>
		<tr>
			<td>
				<div class="div_data_view">
					</br>
					<div class="div_button_actions">
						<span class="span_count"><i>Doctor Record #: <?php echo $count;?></i></span>
						<span class="label label-default" onclick="DeleteY('<?php echo $tbl_id;?>')" title="Delete">Delete</span>
						<span class="label label-default" onclick="UpdateY('<?php echo $tbl_id;?>')" title="Save Changes">Save Changes</span>
						<span class="span_update_status" id="span_update_status<?php echo $tbl_id;?>"></span>
					</div>
					
					<table width=100% border=0>
						
						<tr>
						<td class="table_field">Last Name:</td>
						<td>
						<input id="<?php echo $form_name;?>LN<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['LN'];?>" class="form-control"/>
						</td>
						</tr>
						<tr><td class="table_field">First Name:</td><td><input id="<?php echo $form_name;?>FN<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['FN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Middle Name:</td><td><input id="<?php echo $form_name;?>MN<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['MN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Suffix Name:</td><td><input id="<?php echo $form_name;?>SN<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['SN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Sex:</td><td><input id="<?php echo $form_name;?>GENDER<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['GENDER'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Year of Service:</td><td><input id="<?php echo $form_name;?>YEARS<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['YEARS'];?>" class="form-control"/></td></tr>
						<tr>
							<td class="table_field">Specialization:</td>
							
							<td>
							<select style="width:100%;" id="<?php echo $form_name;?>SPECIALIZATION<?php echo $tbl_id;?>" class="form-control">
							<option value='<?php echo $d['SPECIALIZATION']?>' selected><?php echo $d['SPECIALIZATION']?></option>
								<?php foreach ($result1 as $row): ?>
									<option value='<?php echo $row['specialization']?>'><?php echo $row['specialization']?></option>
								<?php endforeach;?>
							</select>
							
							</td>
							</tr>
						<tr><td class="table_field">Contact Number:</td><td><input id="<?php echo $form_name;?>CN<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['CN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Email:</td><td><input id="<?php echo $form_name;?>email<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $d['email'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Remaining Attempts:</td><td> <p class="form-control"/><?php echo $attempts;?></p></td></tr>	
						<tr><td class="table_field"></td><td><a href="view_ratings.php?id=<?php echo $d['id']?>">View Ratings </a></td></tr>	

						
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