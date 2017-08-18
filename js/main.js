var deleteid = "";
var oldstr = "";


$(function(){
	$('body').hide();
	$('body').fadeIn('slow');
});

		 function loadIframe(iframeName, url) {
    if ( window.frames[iframeName] ) {
        window.frames[iframeName].location = url;   
        return false;
    }
    return true;
}
function fade(obj){
	$(function(){
		$('#' + obj).hide();
		$('#' + obj).fadeIn('slow');
	});
}

$(window).load(function() {
$("#pageloaddiv").fadeOut(2000);
$("#pageloaddivmain").fadeOut(2000);
});

function NewXH(){
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
    }else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
}

function load_data(page){
	NewXH();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("divdata").innerHTML=xmlhttp.responseText;
			$('#divdata').fadeIn('slow');
			//$(".Yselect2").select2();
		}else{
					
			document.getElementById("divdata").innerHTML="Loading Records...";
		}
	}
	xmlhttp.open("GET","pages/" + page + "_view.php?search=" + $('#txtsearch').val(),true);
	xmlhttp.send();
}

function show_page(page, view){
	NewXH();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("leftcontent").innerHTML=xmlhttp.responseText;
			
			
			if(view == "1"){
				InitYcrud(page);
				load_data(page);
			}
			if(page == "profile"){
				$('#div_title').html('Profile');
			}
			
			
		
		}else{
			$("#pageloaddiv").show();
			setTimeout("Hideload()", 3000);
		}
	}

			
		xmlhttp.open("GET","pages/" + page + ".php",true);
	xmlhttp.send();
		
}

function show_pages(page, view){
	NewXH();
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("leftcontent").innerHTML=xmlhttp.responseText;
			
			
			$('#div_title').html('Scholarship information');
		
		}else{
			$("#pageloaddiv").show();
			setTimeout("Hideload()", 3000);
		}
	}

			
	xmlhttp.open("GET","pages/schinfo/schinfo.php?did=" + view,true);
		xmlhttp.send();	

}

function Hideload(){
	$(function(){
		$('#pageloaddiv').fadeOut('slow');
		$('#pageloaddivmain').fadeOut('slow');
	});
}


function ShowStatus(text){
	$("#divactstatus").html(text);
	$("#divactstatus").show();
	setTimeout("HideStatus()", 3000);
}
function HideStatus(){
	$(function(){
		$('#divactstatus').fadeOut('slow');
	});
}

		

function admin_login(){
	var user = document.getElementById('username').value;
	var pass = document.getElementById('password').value;
	if(user==""){
		$('#username').focus();
	}else if(pass==""){
		$('#password').focus();
	}else{
		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("lblstatus").innerHTML=xmlhttp.responseText;
					
				
					if(xmlhttp.responseText.match('Login Successful!')){
					window.location.href = "main.php";
					}
			}else{
				
				document.getElementById("lblstatus").innerHTML="Authenticating...";
			}
		}
		
		xmlhttp.open("GET","pages/login.php?username=" + user + "&password=" + pass,true);
		xmlhttp.send();
	}
}





function handleEnter(inField, e) {
    var charCode;
    if(e && e.which){
        charCode = e.which;
    }else if(window.event){
        e = window.event;
        charCode = e.keyCode;
    }
    if(charCode == 13) {
        admin_login();
    }
}

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
function isNumberKey2(evt){
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
}

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(!regex.test(email)) {
        return false;
    }else{
		return true;
	}
}





function UpdateProfile(){

		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#lblupdatestatus').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('Successful')){

				}
			}else{
				$('#lblupdatestatus').html('Updating Profile...');
			}
		}

			
		
		xmlhttp.open("GET","pages/profile_update.php?LAST_NAME=" + $('#lname').val() + "&FIRST_NAME=" + $('#fname').val() + "&MIDDLE_NAME=" + $('#mname').val() + "&SUFFIX_NAME=" + $('#sname').val() + "&SEX=" + $('#gender').val() + "&WEIGHT=" + $('#weight').val() + "&HEIGHT=" + $('#height').val() +  "&BIRTHDAY=" + $('#bday').val() +  "&BIRTHPLACE=" + $('#bplace').val() + "&CIVIL_STATUS=" + $('#cstat').val() + "&NATIONALITY=" + $('#nat').val() + "&RELIGION=" + $('#rel').val() +  "&ZIPCODE=" + $('#zipcode').val() + "&ADDRESS=" + $('#ad').val() + "&BLOOD_TYPE=" + $('#bloodtype').val() + "&CONTACT_NUMBER=" + $('#cn').val() + "&EMAIL=" + $('#email').val() ,true);
		xmlhttp.send();

}

function UpdateAdminProfile(){

		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#lblupdatestatus').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('Successful')){

				}
			}else{
				$('#lblupdatestatus').html('Updating Profile...');
			}
		}

			
		
		xmlhttp.open("GET","pages/profile_admin_update.php?LAST_NAME=" + $('#lname').val() + "&FIRST_NAME=" + $('#fname').val() + "&MIDDLE_NAME=" + $('#mname').val() + "&Designation=" + $('#pos').val() + "&Contact_Number=" + $('#cn').val() + "&EMAIL=" + $('#email').val() + "&DEPARTMENT=" + $('#dept').val() + "&SUFFIX_NAME=" + $('#sname').val(),true);
		xmlhttp.send();

}

function UpdateDoctorProfile(){

		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#lblupdatestatus').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('Successful')){

				}
			}else{
				$('#lblupdatestatus').html('Updating Profile...');
			}
		}

			
		
		xmlhttp.open("GET","pages/profile_doctor_update.php?LAST_NAME=" + $('#lname').val() + "&FIRST_NAME=" + $('#fname').val() + "&MIDDLE_NAME=" + $('#mname').val() + "&SUFFIX_NAME=" + $('#sname').val() + "&SEX=" + $('#gender').val() + "&CONTACT_NUMBER=" + $('#cn').val() + "&EMAIL=" + $('#email').val() + "&YEARS=" + $('#years').val() ,true);
		xmlhttp.send();

}

function ChangePassword(act){
	if($('#txtold').val() == ''){
		$('#action_status').html('<label style="color:red;">Please enter old password!</label>');
		document.getElementById("txtold").focus();
	}else if($('#txtnew').val() == ''){
		$('#action_status').html('<label style="color:red;">Please enter new password!</label>');
		document.getElementById("txtnew").focus();
	}else if($('#txtcnew').val() == ''){
		$('#action_status').html('<label style="color:red;">Please re-type new password!</label>');
		document.getElementById("txtcnew").focus();
	}else if($('#un').val() == ''){
		$('#action_status').html('<label style="color:red;">Please enter username!</label>');
		document.getElementById("un").focus();
	}else if($('#txtcnew').val() != $('#txtnew').val()){
		$('#action_status').html('<label style="color:red;">Password not match!</label>');
		document.getElementById("txtcnew").focus();
	}else{
		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#action_status').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('successfully')){
					$('#txtold').val('');
					$('#txtnew').val('');
					$('#txtcnew').val('');
				}
			}else{
				$('#action_status').html('Checking...');
			}
		}
		xmlhttp.open("GET","pages/change_pass_save.php?old=" + $('#txtold').val() + "&new=" + $('#txtnew').val() + "&un=" + $('#un').val(),true);
		xmlhttp.send();
	}
}

function ChangeAdminPassword(act){
	if($('#txtold').val() == ''){
		$('#action_status').html('<label style="color:red;">Please enter old password!</label>');
		document.getElementById("txtold").focus();
	}else if($('#txtnew').val() == ''){
		$('#action_status').html('<label style="color:red;">Please enter new password!</label>');
		document.getElementById("txtnew").focus();
	}else if($('#txtcnew').val() == ''){
		$('#action_status').html('<label style="color:red;">Please re-type new password!</label>');
		document.getElementById("txtcnew").focus();
	}else if($('#un').val() == ''){
		$('#action_status').html('<label style="color:red;">Please enter username!</label>');
		document.getElementById("un").focus();
	}else if($('#txtcnew').val() != $('#txtnew').val()){
		$('#action_status').html('<label style="color:red;">Password not match!</label>');
		document.getElementById("txtcnew").focus();
	}else{
		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#action_status').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('successfully')){
					$('#txtold').val('');
					$('#txtnew').val('');
					$('#txtcnew').val('');
				}
			}else{
				$('#action_status').html('Checking...');
			}
		}
		xmlhttp.open("GET","pages/change_pass_admin_save.php?old=" + $('#txtold').val() + "&new=" + $('#txtnew').val()+ "&un=" + $('#un').val(),true);
		xmlhttp.send();
	}
}




function ChangeDoctorPassword(act){
	if($('#txtold').val() == ''){
		$('#action_status').html('<label style="color:red;">Please enter old password!</label>');
		document.getElementById("txtold").focus();
	}else if($('#txtnew').val() == ''){
		$('#action_status').html('<label style="color:red;">Please enter new password!</label>');
		document.getElementById("txtnew").focus();
	}else if($('#txtcnew').val() == ''){
		$('#action_status').html('<label style="color:red;">Please re-type new password!</label>');
		document.getElementById("txtcnew").focus();
	}else if($('#un').val() == ''){
		$('#action_status').html('<label style="color:red;">Please enter username!</label>');
		document.getElementById("un").focus();
	}else if($('#txtcnew').val() != $('#txtnew').val()){
		$('#action_status').html('<label style="color:red;">Password not match!</label>');
		document.getElementById("txtcnew").focus();
	}else{
		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#action_status').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('successfully')){
					$('#txtold').val('');
					$('#txtnew').val('');
					$('#txtcnew').val('');
				}
			}else{
				$('#action_status').html('Checking...');
			}
		}
		xmlhttp.open("GET","pages/change_pass_doctor_save.php?old=" + $('#txtold').val() + "&new=" + $('#txtnew').val()+ "&un=" + $('#un').val(),true);
		xmlhttp.send();
	}
}
function AssignAccount(){
	if($('#un').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter username!</label>');
		document.getElementById("un").focus();
	}else if($('#pw').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter new password!</label>');
		document.getElementById("pw").focus();
	}else if($('#password2').val() != $('#pw').val()){
		$('#lblstatus').html('<label style="color:red;">Password not match!</label>');
		document.getElementById("password2").focus();
	}else if($('#sq1').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter security question 1!</label>');
		document.getElementById("sq1").focus();
	}else if($('#sq2').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter security question 2!</label>');
		document.getElementById("sq2").focus();
	}else if($('#sq1ans').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter security question 1 answer!</label>');
		document.getElementById("sq1ans").focus();
	}else if($('#sq2ans').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter security question 2 answer!</label>');
		document.getElementById("sq2ans").focus();
	}else{
		NewXH();
	
		
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#lblstatus').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('Password successfully saved!')){
					$('#un').val('');
					$('#pw').val('');
					$('#password2').val('');
					$('#sq1').val('');
					$('#sq2').val('');
					$('#sq1ans').val('');
					$('#sq2ans').val('');
					window.location.href = "index.php";
				}
			}else{
				$('#lblstatus').html('Checking...');
			}
		}
		xmlhttp.open("GET","first_assign_save.php?un=" + $('#un').val() + "&PW=" + $('#pw').val() + "&Security_Question=" + $('#sq1').val() + "&Security_Question_Answer=" + $('#sq1ans').val() + "&Security_Question_2=" + $('#sq1').val() + "&Security_Question_Answer_2=" + $('#sq2ans').val()+ "&password2=" + $('#password2').val(),true);
		xmlhttp.send();
	}
}

function ChangeAccount(){
	if($('#un').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter username!</label>');
		document.getElementById("un").focus();
	}else if($('#pw').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter new password!</label>');
		document.getElementById("pw").focus();
	}else if($('#password2').val() != $('#pw').val()){
		$('#lblstatus').html('<label style="color:red;">Password did not match!</label>');
		document.getElementById("password2").focus();
	}else if($('#sq1').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter security question 1!</label>');
		document.getElementById("sq1").focus();
	}else if($('#sq2').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter security question 2!</label>');
		document.getElementById("sq2").focus();
	}else if($('#sq1ans').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter security question 1 answer!</label>');
		document.getElementById("sq1ans").focus();
	}else if($('#sq2ans').val() == ''){
		$('#lblstatus').html('<label style="color:red;">Please enter security question 2 answer!</label>');
		document.getElementById("sq2ans").focus();
	}else{
		NewXH();
	
		
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#lblstatus').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('Password successfully saved!')){
					$('#un').val('');
					$('#pw').val('');
					$('#password2').val('');
					$('#sq1').val('');
					$('#sq2').val('');
					$('#sq1ans').val('');
					$('#sq2ans').val('');
					window.location.href = "index.php";
				}
			}else{
				$('#lblstatus').html('Checking...');
			}
		}
		xmlhttp.open("GET","forgot_save.php?un=" + $('#un').val() + "&PW=" + $('#pw').val() + "&Security_Question=" + $('#sq1').val() + "&Security_Question_Answer=" + $('#sq1ans').val() + "&Security_Question_2=" + $('#sq1').val() + "&Security_Question_Answer_2=" + $('#sq2ans').val()+ "&password2=" + $('#password2').val(),true);
		xmlhttp.send();
	}
}
		


function msgsave(){
		
	if($('#ln').val() == ''){
	
		document.getElementById("ln").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("ln").style.border="dotted silver 1px";
	}
	
	if($('#cn').val() == ''){
	
		document.getElementById("cn").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("cn").style.border="dotted silver 1px";
	}
	
	if($('#message').val() == ''){
	
		document.getElementById("message").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("message").style.border="dotted silver 1px";
	}

	if($('#ln').val() == '' || $('#message').val() == '' || $('#cn').val() == ''){
		
			
	$('#lbltextstatus').html('<label style="color:red;">Please complete all required fields!</label>');		
		
	}else{
		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#lbltextstatus').html(xmlhttp.responseText);
				
				if(xmlhttp.responseText.match('Sent!')){
					$('#lbltextstatus').html('Successful');
					alert("Thank you and we will contact you soon");
					window.location="pages/logout.php";

				}
				
			}else{
				$('#lbltextstatus').html('Please Wait...');
			}
		}

		xmlhttp.open("GET","bt/mail/mail/indexmsg.php?ln=" + $('#ln').val() + "&em=" + $('#em').val() + "&txt=" + $('#message').val() + "&cn=" + $('#cn').val(),true);
		xmlhttp.send();
	}
		
	
			
			
		
}





/*  _________ FORGOT ACCOUNT __________________  */

function forgotvalidate(){
	


	var scp = 0;
	
	
	if($('#usern').val() == ''){
	
		document.getElementById("usern").style.border="dotted red 1px";
			scp= scp + 1;
	}else{
		var value = document.getElementById('usern').value;
		if (value.length < 3) {
		document.getElementById("usern").style.border="dotted red 1px";
		scp= scp + 1;
		}else{
		document.getElementById("usern").style.border="dotted silver 1px";
		}

		
	}
	

	
	if($('#sq1').val() == ''){
			scp= scp + 1;
		document.getElementById("sq1").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("sq1").style.border="dotted silver 1px";
	}
	
	if($('#sq1ans').val() == ''){
			scp= scp + 1;
		document.getElementById("sq1ans").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("sq1ans").style.border="dotted silver 1px";
	}
	
	if($('#sq2').val() == ''){
			scp= scp + 1;
		document.getElementById("sq2").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("sq2").style.border="dotted silver 1px";
	}
	
	if($('#sq2ans').val() == ''){
			scp= scp + 1;
		document.getElementById("sq2ans").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("sq2ans").style.border="dotted silver 1px";
	}
	
	
	if($('#sq2ans').val() == '' || $('#sq2').val() == '' || $('#sq1ans').val() == '' || $('#sq1').val() == '' || $('#usern').val() == ''){
		
			/* myIFrame.contentWindow.$('#lblstatus1').html('<label style="color:red;">Please complete Personal Information required fields!</label>'); */
			$('#lbltextstatus').html('<label style="color:red;">Please complete all required fields!</label>');
			
		
	}else{
		/* myIFrame.contentWindow.$('#lblstatus1').html('<label></label>'); */
		send();
	}

	






	
}

function forgotcheck(){

		
	
	
		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#lbltextstatus').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('Verified!')){
					alert('Account Verified!');
					send();
					
				}else{
					alert('Invalid Username or Security Question did not match!');
					
				}
			}else{
				$('#lbltextstatus').html('Sending...');
			}
		}

	    xmlhttp.open("GET","forgot_save.php?UN=" + $('#usern').val() + "&answer1=" + $('#sq1ans').val() + "&answer2=" + $('#sq2ans').val(),true);
		xmlhttp.send();

		
 
	

		

}

function send(){


		

	
	
		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){

				$('#lbltextstatus').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('Verified!')){
					alert('New password has been sent to your emailaddress!');
					window.location="pages/logout.php";
				}else{
					alert('Invalid Username or Security Question did not match!');
					
				}
				
			}else{
				$('#lbltextstatus').html('Please Wait...');
			}
		}

		xmlhttp.open("GET","bt/mail/mail/index.php?UN=" + $('#usern').val() + "&Security_Question=" + $('#sq1').val() + "&Security_Question_Answer=" + $('#sq1ans').val() + "&Security_Question_2=" + $('#sq2').val() + "&Security_Question_Answer_2=" + $('#sq2ans').val() + "&Security_Question_Answer_2=" + $('#sq2ans').val(),true);
		xmlhttp.send();

		
 
	

		

}



function randString(x){
    var s = "";
    while(s.length<x&&x>0){
        var r = Math.random();
        s+= (r<0.1?Math.floor(r*100):String.fromCharCode(Math.floor(r*26) + (r>0.5?97:65)));
    }
    return s;
}









/*  _________ FORGOT ACCOUNT __________________  */

function fin(){

					
				
}







function generateugrad(){

	var ln = $('#lname').val().toUpperCase();
	var fn = $('#fname').val().toUpperCase();
	var mn = $('#mname').val().toUpperCase().substring(0,1);
	var bday = $('#bday').val();

	var uid = ln + fn + mn + '-' + bday + '-';
	$('#lblugrad').val(uid);
	

	
	
}



function newaccountins(){

		

	
		var sec1 = $('#sq1ans').val();
		var sec2 = $('#sq2ans').val();
		NewXH();
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				$('#lblstatusaccount').html(xmlhttp.responseText);
				if(xmlhttp.responseText.match('Already')){
					alert('Username Already Exist');	
					document.getElementById('lbll').value = '' ;
					$('#lbltextstatus').html('<label style="color:RED;">Username Already Exist</label>');
					
				}else if(xmlhttp.responseText.match('Successfully')){
					$('#lbltextstatus').html('<label style="color:Green;">Successfully Saved!</label>');
						
					alert("Thank you for accomplishing the form.");
					
					window.location="pages/logout.php";
					document.getElementById('lbll').value = '' ;

				}
			}else{
				$('#lbltextstatus').html('<label style="color:Green;">Saving...</label>');
			}
		}

		
		xmlhttp.open("GET","pages/new/accounts_save.php?UN=" + $('#usern').val() + "&PW=" + $('#passw').val() + 
		
		"&UG=" + $('#lblugrad').val() + 
		"&LAST_NAME=" + $('#lname').val() +
		"&FIRST_NAME=" + $('#fname').val() + 
		"&MIDDLE_NAME=" + $('#mname').val() + 
		"&SUFFIX_NAME=" + $('#sname').val() + 
		"&SEX=" + $('#gender').val() + 
		"&BIRTHDAY=" + $('#bday').val() +
		"&BIRTHPLACE=" + $('#bplace').val() +
		"&NATIONALITY=" + $('#nat').val() +
		"&RELIGION=" + $('#rel').val() +
		"&CIVILSTATUS=" + $('#cstat').val() +
		"&HEIGHT=" + $('#height').val() +
		"&WEIGHT=" + $('#weight').val() +
		"&BLOODTYPE=" + $('#bloodtype').val() +
		"&CONTACT_NUMBER=" + $('#cn').val() +
		"&EMAIL=" + $('#email').val() +
		"&ADDRESS=" + $('#ad').val() +
		"&condominium=" + $('#condominium').val() +
		"&barangay=" + $('#barangay').val() +
		"&city=" + $('#city').val() +
		"&secq1=" + sec1 +
		"&secq2=" + sec2 + 
		"&emaccount=" + $('#remail').val()
		, true); 
		xmlhttp.send();	
}
/*  _________ACCOUNT __________________  */


function Validate(){
	
	var scp = 0;
	if($('#lname').val() == ''){
		scp=scp+1;
		document.getElementById("lname").style.border="dotted red 1px";
	
	}else{
		
		document.getElementById("lname").style.border="dotted silver 1px";
	}
	
	if($('#fname').val() == ''){
		scp=scp+1;
		
		document.getElementById("fname").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("fname").style.border="dotted silver 1px";
	}
	
	
	if($('#bday').val() == ''){
		
		scp=scp+1;
		document.getElementById("bday").style.border="dotted red 1px";
	}else{
		
		document.getElementById("bday").style.border="dotted silver 1px";
	}
	
	
	if($('#gender').val() == ''){
		
		scp=scp+1;
		document.getElementById("gender").style.border="dotted red 1px";
	}else{
		
		document.getElementById("gender").style.border="dotted silver 1px";
	}
	
	if($('#nat').val() == ''){
		
		scp=scp+1;
		document.getElementById("nat").style.border="dotted red 1px";
	}else{
		
		document.getElementById("nat").style.border="dotted silver 1px";
	}
	if($('#cstat').val() == ''){
		scp=scp+1;
		
		document.getElementById("cstat").style.border="dotted red 1px";
	}else{
		
		document.getElementById("cstat").style.border="dotted silver 1px";
	}
	
	if($('#bloodtype').val() == ''){
		
		scp=scp+1;
		document.getElementById("bloodtype").style.border="dotted red 1px";
	}else{
		
		document.getElementById("bloodtype").style.border="dotted silver 1px";
	}
	if($('#cn').val() == ''){
		
		scp=scp+1;
		document.getElementById("cn").style.border="dotted red 1px";
	}else{
		
		document.getElementById("cn").style.border="dotted silver 1px";
	}
	
	if($('#email').val() == ''){
		
		scp=scp+1;
		document.getElementById("email").style.border="dotted red 1px";
	}else{
		
		document.getElementById("email").style.border="dotted silver 1px";
	}
	if($('#ad').val() == ''){
		
		scp=scp+1;
		document.getElementById("ad").style.border="dotted red 1px";
	}else{
		
		document.getElementById("ad").style.border="dotted silver 1px";
	}
	
	
	if($('#usern').val() == ''){
		scp=scp+1;
		document.getElementById("usern").style.border="dotted red 1px";
		
	}else{
		var value = document.getElementById('usern').value;
		if (value.length < 3) {
		document.getElementById("usern").style.border="dotted red 1px";
		scp=scp+1;
		}else{
		document.getElementById("usern").style.border="dotted silver 1px";
		}

		
	}
	
	if($('#passw').val() == ''){
		scp=scp+1;
		document.getElementById("passw").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("passw").style.border="dotted silver 1px";
	}
	
	if($('#retypepassw').val() == ''){
		scp=scp+1;
		document.getElementById("retypepassw").style.border="dotted red 1px";
		
	}else{
		
		if($('#retypepassw').val() != $('#passw').val()){
			scp=scp+1;
		document.getElementById("retypepassw").style.border="dotted red 1px";	
	
		alert('Password Did not Match!');
		} else{
			
		document.getElementById("retypepassw").style.border="dotted silver 1px";
			
		}
		
		
	}
	
	if($('#sq1').val() == ''){
		scp=scp+1;
		document.getElementById("sq1").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("sq1").style.border="dotted silver 1px";
	}
	
	if($('#sq2').val() == ''){
		scp=scp+1;
		document.getElementById("sq2").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("sq2").style.border="dotted silver 1px";
	}
	
	if($('#sq1ans').val() == ''){
		scp=scp+1;
		document.getElementById("sq1ans").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("sq1ans").style.border="dotted silver 1px";
	}
	
	if($('#sq2ans').val() == ''){
	scp=scp+1;
		document.getElementById("sq2ans").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("sq2ans").style.border="dotted silver 1px";
	}
	
	if($('#remail').val() == ''){
		scp=scp+1;
		document.getElementById("remail").style.border="dotted red 1px";
		
	}else{
		
		document.getElementById("remail").style.border="dotted silver 1px";
	}
	

	
	if($('#lname').val() == '' || $('#UN').val() == '' || scp > 1){
		
			
		$('#lbltextstatus').html('<label style="color:red;">Please complete all required fields!</label>');
		
			
		
	}else{
		
		
$('#lbltextstatus').html('');		
Promise.all(generateugrad()).then(newaccountins());
		
	}

	
	
}

 
 function addRow(tableID) {
			
			
            var table = document.getElementById(tableID);
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
 
            var colCount = table.rows[1].cells.length;
 
            for(var i=0; i<colCount; i++) {
 
                var newcell = row.insertCell(i);
 
                newcell.innerHTML = table.rows[1].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].id) {
					
					/* --- SCH ---  */
					case "sclistscprog":
							var sclistprogot = $('#scprog').val() + ' ' + $('#scprogothers').val();
                            newcell.childNodes[0].value = sclistprogot;
							newcell.childNodes[0].disabled = true;
                            break;
							
					case "sclistscprogy":
                            newcell.childNodes[0].value = $('#scprogy').val();
							newcell.childNodes[0].disabled = true;
                            break;
							
					case "sclisttxtcourse":
                            newcell.childNodes[0].value = $('#txtcourse').val();
							newcell.childNodes[0].disabled = true;
                            break;
							
					case "sclisttxtcoursename":
                            newcell.childNodes[0].value = $('#txtcoursename').val();
							newcell.childNodes[0].disabled = true;
                            break;
							
					case "sclisttxtcategory":
							var sclistcateg = '';
							if($('#txtcourse').val() == 'Bachelors Degree' || $('#txtcourse').val() == 'Masters Degree' || $('#txtcourse').val() == 'PhD'){
								sclistcateg = $('#txtbscategory').val();
							}else{
								if($('#txttechyes').val() == 'Yes'){
								sclistcateg = $('#txttechcategory').val();
								}else{
								sclistcateg = 'Technical/Technician but did not took Bachelors Degree';
								}
								
							}
                            newcell.childNodes[0].value = sclistcateg;
							newcell.childNodes[0].disabled = true;
                            break;
							
					case "sclisttxtcategorydesc":
							var sclistcategdesc = '';
						
							if($('#txtcourse').val() == 'Bachelors Degree' || $('#txtcourse').val() == 'Masters Degree' || $('#txtcourse').val() == 'PhD'){
								sclistcategdesc = $('#txtbsdesc').val();
							}else{
								if($('#txttechyes').val() == 'Yes'){
								sclistcategdesc = $('#txttechdesc').val();
								}else{
								sclistcategdesc = 'Technical/Technician but did not took Bachelors Degree';
								}
								
							}
                            newcell.childNodes[0].value = sclistcategdesc;
							newcell.childNodes[0].disabled = true;
                            break;
							
					
							
					case "sclistschool":
                            newcell.childNodes[0].value = $('#txtschool').val();
							newcell.childNodes[0].disabled = true;
                            break;
							
					case "sclistyeargraduated":
                            newcell.childNodes[0].value = $('#txtyeargrad').val();
							newcell.childNodes[0].disabled = true;
                            break;
					
					case "sclistawards":
                            newcell.childNodes[0].value = $('#txtawards').val();
							newcell.childNodes[0].disabled = true;
                            break;
							
					case "sclisttechyesno":
							var schlisttechyesno = '';
							if($('#txtcourse').val() == 'Bachelors Degree' || $('#txtcourse').val() == 'Masters Degree' || $('#txtcourse').val() == 'PhD'){
								schlisttechyesno = 'Taken Bachelors Degree/Masters Degree/PhD Course';
							}else{
								
								schlisttechyesno = $('#txttechyes').val();
								
								
							}
                            newcell.childNodes[0].value = schlisttechyesno;
							newcell.childNodes[0].disabled = true;
                            break;
					
					case "sclisttechyes":
							var schlisttechyes = '';
							if($('#txtcourse').val() == 'Bachelors Degree' || $('#txtcourse').val() == 'Masters Degree' || $('#txtcourse').val() == 'PhD'){
								schlisttechyes = 'Taken Bachelors Degree/Masters Degree/PhD Course';
							}else{
								if($('#txttechyes').val() == 'Yes'){
								schlisttechyes = $('#txttechbs').val();
								}else{
								schlisttechyes = 'Technical/Technician but did not took Bachelors Degree';
								}
								
							}
							
							
                            newcell.childNodes[0].value = schlisttechyes;
							newcell.childNodes[0].disabled = true;
                            break;
					
					
				   
                }
	
            }
			
			if(tableID == 'dataTable'){
			emphistlist();
			document.getElementById('emplist').scrollIntoView();
			}
			
			
			
			
			
			
}
 
 function deleteRow(tableID) {
            try {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
 
            for(var i=0; i<rowCount; i++) {
                var row = table.rows[i];
                var chkbox = row.cells[0].childNodes[0];
                if(null != chkbox && true == chkbox.checked) {
                    if(rowCount <= 2) {
                 
						
                        break;
                    }
                    table.deleteRow(i);
                    rowCount--;
                    i--;
                }
 
 
            }
            }catch(e) {
                alert(e);
            }
        }
 /*-------- sclist ---------*/		
	
function newas() {
		 var x = document.getElementById('new');
		 var y = document.getElementById('main');
		 
		 x.style.display="block";
		 y.style.display="none";	
		 
        }

