// Get modal element

var modal = document.getElementById('simpleModal');

// get open modal button

var modalBtn = document.getElementById('modalBtn');

//Get close button 

var closeBtn = document.getElementsByClassName('closeBtn')[0];

//Listen for open click
modalBtn.addEventListener('click', openModal);

//Listen for close click

closeBtn.addEventListener('click', closeModal);

//Listen for outside click

window.addEventListener('click', clickOutside);


var n = 0;
 var key1 = "";

//Function to open modal

function openModal(){
	
	modal.style.display = 'block';
	
}

//Function to close modal

function closeModal() {
	
	modal.style.display = 'none';
}

// Function to close modal if outside click 

function clickOutside(e) {
	
	if(e.target == modal){
	modal.style.display = 'none';
	
	}
}
function deliveryOption() {
	
	if(document.getElementById('Delivery').checked) {
		
		var d = new Date();
		var getDay = d.getDay();
		var getMonth = d.getMonth();
		var getDate = d.getDate();
		var getYear = d.getFullYear();
		
		
		$('#showContent').html('');
		$('#showContent').html('&nbsp;Day: <select id="selectDays" name="days"><option value="1">Monday</option><option value="2">Tuesday</option><option value="3">Wednesday</option><option value="4">Thursday</option><option value="5">Friday</option><option value="6">Saturday</option><option value="7">Sunday</option></select>&nbsp;Date: <select id="selectDate" name="date"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>&nbsp;Month: <select id="selectMonth" name="Month"><option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select>&nbsp;Year: <input id="currentYear" onkeydown="validate(event)" type="text">');
		$('#selectDays').val(getDay);
		$('#selectDate').val(getDate);
		$('#selectMonth').val(getMonth);
		$('#currentYear').val(getYear);
	} else if(document.getElementById('PatientToCollect').checked) {
		
		$('#showContent').html('');
		
	}
	
	
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
  
		
	if(n == 0) {
			
			
		if(evt.keyCode === 8) {

		$('#currentYear').val('');

		}

		
		
		
	} else if(n != 0) {
			
			
		if(evt.keyCode === 8) {

		key1 = key1.substring(0,key1.length -1);
		$('#currentYear').val(key1);

		} else 		
			
		key1 = 	key1 + key;
		}
		
		
		
		
		var d = new Date();
		var getDay = d.getDay();
		var getMonth = d.getMonth();
		var getDate = d.getDate();
		var getYear = d.getFullYear();
		
		var inputValue = $('#currentYear').val();
		
	
		
		if(key1 < getYear) {
			
			$('#currentYear').css({'color':''});
			$('#currentYear').css({'color':'red'});
			
		} else if(key1 > getYear || key1 == getYear) {
			
			$('#currentYear').css({'color':''});
			$('#currentYear').css({'color':'black'});
		}
	
	n++;
}



