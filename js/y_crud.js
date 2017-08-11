
function SaveY(act){
	if($('#' + y_fields[0]).val() == ''){
		$('#action_status').html('<label style="color:red;">Please fill-up all required fields!</label>');
		document.getElementById(y_fields[0]).focus();
	}else{
		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#action_status').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('Successful')){
					ClearY();
					ShowStatus("Successfull!");
					load_data(y_path);
				}
			}else{
				$('#action_status').html('Saving...');
			}
		}
		
		var data = "";
		if (y_fields) {
			for (i in y_fields) {
			  if(i==0){
				data = data + y_fields[i] + "=" + $('#' + y_fields[i]).val();
			  }else{
				data = data + "&" + y_fields[i] + "=" + $('#' + y_fields[i]).val();
			  }
			}
		}
		
		xmlhttp.open("GET","pages/" + y_path + "_save.php?" + data,true);
		xmlhttp.send();
	}
}
function UpdateY(id){
	NewXH();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			load_data(y_path);
			$('#span_update_status' + id).html('');
			ShowStatus("Successful!");
			
		}else{
			$('#span_update_status' + id).html('Saving...');
		}
	}
	
		var data = "";
		if (y_fields) {
			for (i in y_fields) {
				data = data + "&" + y_fields[i] + "=" + $('#' + y_name + y_fields[i] + id).val();
			}
		}
	
	xmlhttp.open("GET","pages/" + y_path + "_update.php?" + "id=" + id + data,true);
	xmlhttp.send();
}
function ClearY(){
	if (y_fields) {
		for (i in y_fields) {
			$('#' + y_fields[i]).val('');
		}
	}
}
function AddY(){
	$('#action_status').html('');
	$('#divdata').hide();
	$('#divnav').hide();
	$('#divadd').show('slow');
}
function CancelY(){
	$('#divadd').hide();
	$('#divedit').hide();
	$('#divnav').show('slow');
	$('#divdata').show('slow');
	load_data(y_path);
}
function GoDeleteY(){
		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#divdeletestatus').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('Successful')){
					load_data(y_path);
					$('#divdelete').hide();
					ShowStatus("Successful!");
				}
			}else{
				$('#divdeletestatus').html('Deleting...');
			}
		}
		xmlhttp.open("GET","pages/"+ y_path +"_delete.php?id="+deleteid,true);
		xmlhttp.send();
}
function DeleteY(id){
	$('#divdeletestatus').html('');
	deleteid = id;
	$('#divdelete').show();
}
function DeleteNoY(){
	$('#divdelete').hide();
}






