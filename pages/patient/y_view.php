<?php
session_start();
$form_name = "patient";

include "../../cn.php";
$q = "SELECT * FROM patient WHERE LN LIKE '%".$_GET['search']."%' OR 
					FN LIKE '%".$_GET['search']."%' OR 
					MN LIKE '%".$_GET['search']."%' OR 
					SN LIKE '%".$_GET['search']."%' OR 
					GENDER LIKE '%".$_GET['search']."%' OR 
					BIRTHDAY LIKE '%".$_GET['search']."%' OR 
					ADDRESS LIKE '%".$_GET['search']."%' OR 
					CONTACT_NUMBER LIKE '%".$_GET['search']."%' OR 
					EMAIL LIKE '%".$_GET['search']."%'";			

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
		$email = $d['EMAIL'];
		$query = $db->query("SELECT * FROM user WHERE EMAIL = '$email'");
		$row = $query->fetch_object();
		$attempts = $row->attempts;
		
		?>
		<tr>
			<td>
				<div class="div_data_view">
					</br>
					<div class="div_button_actions">
						<span class="span_count"><i>Patient Record #: <?php echo $count;?></i></span>
						<span class="label label-default" onclick="DeleteY('<?php echo $tbl_id;?>')" title="Delete">Delete</span>
						<span class="label label-default" onclick="UpdateY('<?php echo $tbl_id;?>')" title="Save Changes">Save Changes</span>
						<span class="span_update_status" id="span_update_status<?php echo $tbl_id;?>"></span>
					</div>
					
					<table width=100% border=0>
						
						<tr><td class="table_field">Last Name:</td><td><input  id="<?php echo $form_name;?>LN<?php echo $tbl_id;?>" required type="text" placeholder="Enter Last Name" value="<?php echo $d['LN'];?>" class="form-control"></td></tr>
						<tr><td class="table_field">First Name:</td><td> <input  id="<?php echo $form_name;?>FN<?php echo $tbl_id;?>" required type="text"  placeholder="Enter First Name" value="<?php echo $d['FN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Middle Name:</td><td> <input id="<?php echo $form_name;?>MN<?php echo $tbl_id;?>"  required type="text"  placeholder="Enter Middle Name" value="<?php echo $d['MN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Suffix Name:</td><td> <input  id="<?php echo $form_name;?>SN<?php echo $tbl_id;?>" required type="text"  placeholder="Enter Suffix Name" value="<?php echo $d['SN'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Sex:</td><td> <select id="<?php echo $form_name;?>GENDER<?php echo $tbl_id;?>" required placeholder="Enter Gender" class="form-control">
					
							<option/>
							<option <?php if($d['GENDER']=='Male'){echo 'selected';}?>>Male</option>
							<option <?php if($d['GENDER']=='Female'){echo 'selected';}?>>Female</option>
				
							</select></td></tr>
						<tr><td class="table_field">Birthday:</td><td> 
							<input id="<?php echo $form_name;?>BIRTHDAY<?php echo $tbl_id;?>" required type="text" placeholder="Enter Birthday" value="<?php echo $d['BIRTHDAY'];?>" class="form-control"/>
    
						</td></tr>
						<tr><td class="table_field">Birthplace:</td><td> <input  id="<?php echo $form_name;?>BIRTHPLACE<?php echo $tbl_id;?>" required type="text" placeholder="Enter Birthplace" value="<?php echo $d['BIRTHPLACE'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Nationality:</td><td> <input id="<?php echo $form_name;?>NATIONALITY<?php echo $tbl_id;?>"  required type="text" placeholder="Enter Nationality" value="<?php echo $d['NATIONALITY'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Religion:</td><td> <input  id="<?php echo $form_name;?>RELIGION<?php echo $tbl_id;?>" required type="text" placeholder="Enter Religion" value="<?php echo $d['RELIGION'];?>" class="form-control"/></td></tr>	
						<tr><td class="table_field">Civil Status:</td><td> 
								<select id="<?php echo $form_name;?>CIVILSTATUS<?php echo $tbl_id;?>" required placeholder="Enter Civil Status" class="form-control">
								<option/>
								<option <?php if($d['CIVILSTATUS']=='Single'){echo 'selected';}?>>Single</option>
								<option <?php if($d['CIVILSTATUS']=='Married'){echo 'selected';}?>>Married</option>
								<option <?php if($d['CIVILSTATUS']=='Widowed'){echo 'selected';}?>>Widowed</option>
								<option <?php if($d['CIVILSTATUS']=='Divorced'){echo 'selected';}?>>Divorced</option>
				
								</select>
						</td></tr>	
						<tr><td class="table_field">Height:</td><td> <input id="<?php echo $form_name;?>HEIGHT<?php echo $tbl_id;?>"  required type="text" placeholder="Enter Height" value="<?php echo $d['HEIGHT'];?>" class="form-control"/></td></tr>	
						<tr><td class="table_field">Weight:</td><td> <input id="<?php echo $form_name;?>WEIGHT<?php echo $tbl_id;?>"  required type="text"  placeholder="Enter Weight" value="<?php echo $d['WEIGHT'];?>" class="form-control"/></td></tr>	
						<tr><td class="table_field">Blood Type:</td><td> <input  id="<?php echo $form_name;?>BLOOD_TYPE<?php echo $tbl_id;?>" required type="text"  placeholder="Enter bloodtype" value="<?php echo $d['BLOOD_TYPE'];?>" class="form-control"/></td></tr>	
						<tr><td class="table_field">Contact Number:</td><td> <input id="<?php echo $form_name;?>CONTACT_NUMBER<?php echo $tbl_id;?>"  required type="text" placeholder="Enter Contact Number" value="<?php echo $d['CONTACT_NUMBER'];?>" class="form-control"/></td></tr>	
						<tr><td class="table_field">Email:</td><td> <input id="<?php echo $form_name;?>EMAIL<?php echo $tbl_id;?>"  required type="text"  placeholder="Enter Email" value="<?php echo $d['EMAIL'];?>" class="form-control"/></td></tr>	
						<tr><td class="table_field">Address:</td><td> <input id="<?php echo $form_name;?>ADDRESS<?php echo $tbl_id;?>"  required type="text" placeholder="Enter Address" value="<?php echo $d['ADDRESS'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Condominium:</td><td> <input id="<?php echo $form_name;?>CONDOMINIUM<?php echo $tbl_id;?>"  required type="text" placeholder="Enter Condominium" value="<?php echo $d['CONDOMINIUM'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">Barangay:</td><td> <input id="<?php echo $form_name;?>BARANGAY<?php echo $tbl_id;?>"  required type="text" placeholder="Enter barnagay" value="<?php echo $d['BARANGAY'];?>" class="form-control"/></td></tr>
						<tr><td class="table_field">City:</td><td> <input id="<?php echo $form_name;?>CITY<?php echo $tbl_id;?>"  required type="text" placeholder="Enter Address" value="<?php echo $d['CITY'];?>" class="form-control"/></td></tr>	
						<tr><td class="table_field">Remaining Attempts:</td><td> <p class="form-control"/><?php echo $attempts;?></p></td></tr>	
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