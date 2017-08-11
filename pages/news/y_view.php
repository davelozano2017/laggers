<?php
session_start();
$form_name = "news";

include "../../cn.php";
$q = "SELECT * FROM news WHERE id <> '1' and (title LIKE '%".$_GET['search']."%' OR content LIKE '%".$_GET['search']."%' OR dt LIKE '%".$_GET['search']."%')";			

$news  = $pdo->query($q);
$result = $news->fetchAll();			
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
<center>
<table border=0 width=100%>
	<tr>
		<th colspan="7" align=left>Number of Records: <?php echo $news->rowCount();?></th>
	</tr>
	<?php
	$count = 0;
	foreach( $result as $row ) {
    $tbl_id = $row['id'];
	$count = $count + 1;
	?>
	<tr>
			<td>
				<div class="div_data_view">
				
					<div class="div_button_actions">
						<span class="span_count"><i>News/Annoucement Record #: <?php echo $count;?></i></span>
						<a href="#"><span class="label label-default" onclick="DeleteY('<?php echo $tbl_id;?>')" title="Delete">Delete</span></a>
						<a  href="main.php?p=editor&id=<?php echo $tbl_id; ?>"><span class="label label-default" title="Save Changes">Update</span></a>
						<span class="span_update_status" id="span_update_status<?php echo $tbl_id;?>"></span>
					</div>
					
					<table width=100% border=0>
						
						<tr><td class="table_field">Title:</td><td><input disabled id="<?php echo $form_name;?>title<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $row['title'];?>" class="form-control"/></td></tr>
		
						<tr><td class="table_field">Date Posted/Updated:</td><td><input disabled id="<?php echo $form_name;?>year<?php echo $tbl_id;?>" style="width:100%;" type="text" value="<?php echo $row['dt'];?>" class="form-control"/></td></tr>
						
					</table>
					
				</div>
			</td>
		</tr>
	<?php
	}
	?>	
	
	
	
	
	
</table>

<input type="hidden" id="txtnoofrecords" value="<?php echo $news->rowCount();?>" />
<div id="green" style="margin: 0px;padding:0px;width:100%;"></div>
</center>
</body>

</html>