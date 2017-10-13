<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Simple Modal</title>
	<link rel="stylesheet" href="modalbox/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>

<body>

<button id="modalBtn" class="button">Click Here</button>

<div id="simpleModal" class="modal">
	<div class="modal-content">
		<div class="modal-header">
			<span class="closeBtn">&times;</span>
			<h2 style="text-align: center;">Delivery Options</h2>
	</div>
	<div class="modal-body">
	<input type="radio" name="service" value="PTC" id="PatientToCollect" onclick="deliveryOption();"><label style="font-size: 19px">Patient To Collect</label> &nbsp; 
	<input type="radio" name="service" value="delivery" id="Delivery" onclick="deliveryOption();"><label style="font-size: 19px">Delivery</label> &nbsp;
	<div id="showContent" class="delivery">
	<!--
	Day: <select name="days">
	<option value="Monday">Monday</option>
	<option value="Tuesday">Tuesday</option>
	<option value="Wednesday">Wednesday</option>
	<option value="Thursday">Thursday</option>
	<option value="Friday">Friday</option>
	<option value="Saturday">Saturday</option>
	<option value="Sunday">Sunday</option>
	</select>
	&nbsp;
	Date: <select name="date">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	</select>
	&nbsp;
	Month: <select name="Month">
	<option value="January">January</option>
	<option value="February">February</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
	</select>
	&nbsp;
	Year: <input type="text">
	-->
	</div>
	</div>
	<div class="modal-footer"></div>

</div>
</div>

<script src="modalbox/main.js"></script>
</body>
</html>