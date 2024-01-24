$(document).ready(function() {
	
	$("#f2").focusout(function(){
		var x2=$("input[name='first_name']").val();
		pattern2=/^[a-zA-Z][a-zA-Z ]+$/;
		if(x2=="")
		{
			document.getElementById('error2').innerHTML='playername is empty.';
		}
		else if(!pattern2.test(x2))
		{
			document.getElementById('error2').innerHTML='Invalid playername.';
		}
		else if(pattern2.test(x2))
		{
			document.getElementById('error2').innerHTML='';
		}
	});
	
	$("#f3").focusout(function(){
		var x3=$("input[name='date2']").val();
		pattern3=/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}/;
		if(x3=="")
		{
			document.getElementById('error3').innerHTML='date of birth is empty.';
		}
		else if(!pattern3.test(x3))
		{
			document.getElementById('error3').innerHTML='Invalid date of birth.';
		}
		else if(pattern3.test(x3))
		{
			document.getElementById('error3').innerHTML='';
		}
		agecount=parseInt(document.getElementById('age').innerHTML);
		if(agecount<=18 || agecount>35)
		{
			document.getElementById('error3').innerHTML='not allowed player.';
		}
		
	});
   
   handleDOBChanged();
   
   $("#f4").focusout(function(){
		var x5=$("input[name='contact_no']").val();
		pattern5=/^[0-9]{10}$/;
		if(x5=="")
		{
			document.getElementById('error5').innerHTML='mobileNo is empty.';
		}
		else if(!pattern5.test(x5))
		{
			document.getElementById('error5').innerHTML='invalid mobile number.';
		}
		else if(pattern5.test(x5))
		{
			document.getElementById('error5').innerHTML='';
		}
	});
	
	$("#f5").focusout(function(){
		var x6=$("textarea[name='addr']").val();
		pattern6=/^[a-zA-Z0-9][a-zA-Z0-9 -_.,]+$/;
		if(x6=="")
		{
			document.getElementById('error6').innerHTML='address is empty.';
		}
		else if(!pattern6.test(x6))
		{
			document.getElementById('error6').innerHTML='invalid address.';
		}
		else if(pattern6.test(x6))
		{
			document.getElementById('error6').innerHTML='';
		}
	});
	
	$("#f6").focusout(function(){
		var x7=$("input[name='email']").val();
		pattern7=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(x7=="")
		{
			document.getElementById('error7').innerHTML='emailid is empty.';
		}
		else if(!pattern7.test(x7))
		{
			document.getElementById('error7').innerHTML='invalid emailid.';
		}
		else if(pattern7.test(x7))
		{
			document.getElementById('error7').innerHTML='';
		}

	});
	
	$("#f7").focusout(function(){
		var x8=$("input[name='user_password']").val();
		pattern8=/^[a-zA-Z0-9][a-zA-Z0-9]{4,6}$/;
		if(x8=="")
		{
			document.getElementById('error8').innerHTML='password is empty.';
		}
		else if(!pattern8.test(x8))
		{
			document.getElementById('error8').innerHTML='invalid password.';
		}
		else if(pattern8.test(x8))
		{
			document.getElementById('error8').innerHTML='';
		}

	});
	
	$("#f8").focusout(function(){
		var x9=$("input[name='confirm_password']").val();
		pattern9=/^[a-zA-Z0-9][a-zA-Z0-9]{4,6}$/;
		if(x9=="")
		{
			document.getElementById('error9').innerHTML='confirmpassword is empty.';
		}
		else if(!pattern9.test(x9))
		{
			document.getElementById('error9').innerHTML='invalid password.';
		}
		else if(pattern9.test(x9))
		{
			document.getElementById('error9').innerHTML='';
		}
		pass=$("#f7").val();
		pass1=$("#f8").val();
		if(pass!=pass1)
		{
			document.getElementById('error9').innerHTML='not matched.';
		}

	});
	
	$("#selectcaste").focusout(function(){
		var x9=$("select[name='selectcaste']").val();
		if(x9=="sel")
		{
			document.getElementById('error10').innerHTML='you do not select any caste.';
		}

	});

});
function handleDOBChanged() {
    $('#f3').on('change', function () {
      if (isDate($('#f3').val())) {
        var age = calculateAge(parseDate($('#f3').val()), new Date());
      	$("#age").text(age);   
      } else {
        $("#age").text('');   
      }      
    });
}

//convert the date string in the format of dd/mm/yyyy into a JS date object
function parseDate(dateStr) {
  var dateParts = dateStr.split("/");
  return new Date(dateParts[2], (dateParts[1] - 1), dateParts[0]);
}

//is valid date format
function calculateAge (dateOfBirth, dateToCalculate) {
    var calculateYear = dateToCalculate.getFullYear();
    var calculateMonth = dateToCalculate.getMonth();
    var calculateDay = dateToCalculate.getDate();

    var birthYear = dateOfBirth.getFullYear();
    var birthMonth = dateOfBirth.getMonth();
    var birthDay = dateOfBirth.getDate();

    var age = calculateYear - birthYear;
    var ageMonth = calculateMonth - birthMonth;
    var ageDay = calculateDay - birthDay;

    if (ageMonth < 0 || (ageMonth == 0 && ageDay < 0)) {
        age = parseInt(age) - 1;
    }
    return age;
}

function isDate(txtDate) {
  var currVal = txtDate;
  if (currVal == '')
    return true;

  //Declare Regex
  var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/;
  var dtArray = currVal.match(rxDatePattern); // is format OK?

  if (dtArray == null)
    return false;

  //Checks for dd/mm/yyyy format.
  var dtDay = dtArray[1];
  var dtMonth = dtArray[3];
  var dtYear = dtArray[5];

  if (dtMonth < 1 || dtMonth > 12)
    return false;
  else if (dtDay < 1 || dtDay > 31)
    return false;
  else if ((dtMonth == 4 || dtMonth == 6 || dtMonth == 9 || dtMonth == 11) && dtDay == 31)
    return false;
  else if (dtMonth == 2) {
    var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
    if (dtDay > 29 || (dtDay == 29 && !isleap))
      return false;
  }

  return true;
}