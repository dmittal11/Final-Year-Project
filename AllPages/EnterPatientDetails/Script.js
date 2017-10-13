function submitData(){
	
	var FirstName = $('#firstName').val();
	var Surname = $('#Surname').val();
	var houseNumber = $('#houseNumber').val();
	var Address = $('#Address').val();
	var Address_City = $('#Address_City').val();
	var postCode = $('#postCode').val();
	var NHSNumber = $('#nhsNumber').val();
	var Landline = $('#landLine').val();
	var Mobile = $('#mobile').val();
	var Email = $('#emailAddress').val();
	
	var MedicationName = $('#NameOfMedication').val();
	var Strength = $('#Strength').val();
	var Quantity = $('#Quantity').val();
	var Duration = $('#Duration').val();
	var UnitsPerDuration = $('#UnitsPerDuration').val();
	var UnitsOfMeasurements = $('#UnitsOfMeasurements').val();
	
	
	var insertData = {
		
		'post_FirstName' : FirstName,
		'post_Surname' : Surname,
		'post_houseNumber' : houseNumber,
		'post_Address' : Address,
		'post_AddressCity': Address_City,
		'post_postCode': postCode,
		'post_NHSNumber': NHSNumber,
		'post_Landline' : Landline,
		'post_mobile' : Mobile,
		'post_Email' : Email,
		'post_medicationName' : MedicationName,
		'post_Strength' : Strength,
		'post_Quantity' : Quantity,
		'post_Duration' : Duration,
		'post_unitsPerDuration' : UnitsPerDuration,
		'post_unitsOfMeasurements' : UnitsOfMeasurements
		
	}
		console.log(insertData);
		
		$.ajax({
			
			type: 'POST',
			url: 'Insert.php',
			data: insertData,
			dataType: 'json',
						encode		:true
			
			
		})
}


function validate(evt) {
	
  var theEvent = evt || window.event;
  key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
	
	
  }
}