<?php

include_once('db.php');


if(

isset($_POST['post_Username']) &&
isset($_POST['post_Password'])

)

$Username = $_POST['post_Username'];
$Password = $_POST['post_Password'];

$query_Table = "SELECT * FROM `logintable` WHERE Id = 1";

$getResult = $db->prepare($query_Table);
$getResult->execute();

$result = $getResult->fetch(PDO::FETCH_ASSOC);

$id = $result['Id'];
$User = $result['Username'];
$Pass = $result['Password'];

/*
echo $id.'<br>';
echo $User.'<br>';
echo $Pass.'<br>';

echo $Username.'<br>';
echo $Password.'<br>';
*/

if($User == $Username && $Pass == $Password) {
	
	$key_id = 1;
	
	$valid = 1;
	
	
	$deleteDataQuery = "DELETE FROM `pageredirect` WHERE `key_id` = '$key_id'";
	$deleteData = $db->prepare($deleteDataQuery);
	$deleteData->execute();
	
	
	$insertdata = $db->prepare("INSERT INTO pageredirect (key_id,valid) VALUES(:key_id,:valid)");
	
	$insertdata->bindParam(':key_id',$key_id);
	$insertdata->bindParam(':valid',$valid);
	
	
	
	$insertdata->execute();
	
	
	
} else {
	

	$key_id = 1;
	$valid = 0;
	
	$deleteDataQuery = "DELETE FROM `pageredirect` WHERE `key_id` = '$key_id'";
	$deleteData = $db->prepare($deleteDataQuery);
	$deleteData->execute();
	
	$insertdata = $db->prepare("INSERT INTO pageredirect (key_id,valid) VALUES(:key_id,:valid)");
	$insertdata->bindParam(':key_id',$key_id);
	$insertdata->bindParam(':valid',$valid);
	
	$insertdata->execute();
	
}




?>