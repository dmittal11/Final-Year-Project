<?php

include_once('db.php');

$query_Table = "SELECT * FROM `pageredirect` WHERE key_id = 1";
$getResult = $db->prepare($query_Table);
$getResult->execute();

$result = $getResult->fetch(PDO::FETCH_ASSOC);

$valid = $result['valid'];




if($valid == 1) {
	
	header('Location: index_redirected.html');
	
	
}


?>




<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<title>Your Website</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="style.css" type="text/css" />
<script type="text/javascript"></script>
  <script src="Script.js"></script>
</head>

<body>

<div class="container">
	<section id="content">
		<h1>Registration Form</h1>

		<!--
		<form>
		-->
			<div class="wrapper">
				<i class="fa fa-user"></i>
				<input id="Email" type="email" placeholder="Email" required/>
			</div>
			
			<div class="wrapper">
				<i class="fa fa-user"></i>
				<input id="Username" type="text" placeholder="Username" required/>
			</div>

			<div class="wrapper">
				<i class="fa fa-lock"></i>
				<input id="pass" type="password" placeholder="Password" required/>
			</div>
			
			<div class="wrapper">
				<i class="fa fa-lock"></i>
				<input id="pass1" type="password" placeholder="Password" required/>
			</div>
			
			
			<div>
				<button id="button" onclick="Konsole();">Register</button>
			</div>

			<div>
				<a href="#" style="float: left;">Register New User</a>
				<a href="#" style="float: right;">Lost Your Password</a>
			</div>

		<!--
		</form>
	-->
	</section>
</div>


</body>
</html>
