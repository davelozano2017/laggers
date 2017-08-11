var y_name = "";
var y_path = y_name + "/y";
var y_fields = [];

function InitYcrud(page){

	switch(page){
		
	
			
		case "news/y":
			y_name = "news";
			y_path = y_name + "/y";
			y_fields = [];
			y_fields.push('title');
			y_fields.push('content');
			y_fields.push('dt');

			$('#div_title').html('News/Announcement');
			//$(document).ready(function() { $(".Yselect2").select2(); });
		break;
	
	
		case "patientpending/y":
			y_name = "patientpending";
			y_path = y_name + "/y";
			y_fields = [];
			y_fields.push('LN');
			y_fields.push('FN');

			$('#div_title').html('Patient Pending Approval');
			
		break;
		
		case "doctors/y":
			y_name = "doctors";
			y_path = y_name + "/y";	
			y_fields = [];
			y_fields.push('LN');
			y_fields.push('FN');
			y_fields.push('MN');
			y_fields.push('SN');
			y_fields.push('YEARS');
			y_fields.push('SPECIALIZATION');
			y_fields.push('GENDER');
			y_fields.push('CN');
			y_fields.push('email');
			y_fields.push('username');
			y_fields.push('password');
			y_fields.push('attempts');
			$('#div_title').html('List of Doctors');
			
		break;
		
		case "patient/y":
			y_name = "patient";
			y_path = y_name + "/y";	
			y_fields = [];
			y_fields.push('LN');
			y_fields.push('FN');
			y_fields.push('MN');
			y_fields.push('SN');
			y_fields.push('GENDER');
			y_fields.push('WEIGHT');
			y_fields.push('HEIGHT');
			y_fields.push('BIRTHDAY');
			y_fields.push('BIRTHPLACE');
			y_fields.push('CIVILSTATUS');
			y_fields.push('NATIONALITY');
			y_fields.push('ZIPCODE');
			y_fields.push('RELIGION');
			y_fields.push('ADDRESS');
			y_fields.push('BLOOD_TYPE');
			y_fields.push('CONTACT_NUMBER');
			y_fields.push('EMAIL');
			y_fields.push('sq1ans');
			y_fields.push('sq2ans');
			y_fields.push('attempts');
			$('#div_title').html('List of Patients');
			
	
			
		break;
		
		case "patientappointment/y":
			y_name = "patient";
			y_path = y_name + "/y";	
			y_fields = [];
	
		
			
			$('#div_title').html('List of Appointment');
			
	
			
		break;
		

			
			


			

			
	
			
	
			
	}

}