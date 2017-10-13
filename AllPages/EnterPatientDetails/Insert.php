<?php

include_once('db.php');

if(

isset($_POST["post_FirstName"]) &&
isset($_POST["post_Surname"]) &&
isset($_POST["post_houseNumber"]) &&
isset($_POST["post_Address"]) &&
isset($_POST["post_AddressCity"]) &&
isset($_POST["post_postCode"]) &&
isset($_POST["post_NHSNumber"]) &&
isset($_POST["post_Landline"]) &&
isset($_POST["post_mobile"]) &&
isset($_POST["post_Email"]) &&
isset($_POST["post_medicationName"]) &&
isset($_POST["post_Strength"]) &&
isset($_POST["post_Quantity"]) &&
isset($_POST["post_Duration"]) &&
isset($_POST["post_unitsPerDuration"]) &&
isset($_POST["post_unitsOfMeasurements"])

)
{
$FirstName = $_POST["post_FirstName"];
$Surname = $_POST["post_Surname"];
$houseNumber = $_POST["post_houseNumber"];
$Address = $_POST["post_Address"];
$City = $_POST["post_AddressCity"];
$postCode = $_POST["post_postCode"];
$NHSNumber = $_POST["post_NHSNumber"];
$Landline = $_POST["post_Landline"];
$Mobile = $_POST["post_mobile"];
$Email = $_POST["post_Email"];
$MedicationName = $_POST["post_medicationName"];
$MedicationStrength = $_POST["post_Strength"];
$MedicationQuantity = $_POST["post_Quantity"];
$MedicationDuration = $_POST["post_Duration"];
$UnitsPerDuration = $_POST["post_unitsPerDuration"];
$UnitsOfMeasurements = $_POST["post_unitsOfMeasurements"];

}

$result = $db->prepare("SHOW TABLES LIKE '%customer_details%'");
$result->execute();

	if($result->rowCount() == 1) {
		
		echo "Table Exists";
		
	}
	
 else {
	
	echo "Table does not exist";
	
	$result = $db->prepare('CREATE TABLE `customer_details` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(1000) NOT NULL,
  `Surname` varchar(1000) NOT NULL,
  `HouseNumber` int(11) NOT NULL,
  `Address(Street)` varchar(1000) NOT NULL,
  `Address(City)` varchar(100) NOT NULL,
  `PostCode` varchar(20) NOT NULL,
  `NHSNumber` varchar(30) NOT NULL,
  `Landline` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
');
	
 $result->execute();

 $result = $db->prepare('ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`Id`);');
 
 $result->execute();
}



/*
$query_getmaxId = "SELECT Id FROM `customer_details` WHERE Id in (SELECT MAX(Id) as max_Id FROM `customer_details`)";

$getmaxId = $db->prepare($query_getmaxId);
$getmaxId->execute();
$result = $getmaxId->fetch(PDO::FETCH_ASSOC);

$id = $result["Id"];

$id = $id + 1;


*/





















?>