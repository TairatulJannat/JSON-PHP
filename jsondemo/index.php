<?php
//$u_id = $_GET['u_id'];
$data = file_get_contents("7.json");  
$data = json_decode($data, true);
//var_dump($data);
$dateToDayId =  $data["calendar"]["dateToDayId"];
//var_dump($dateToDayId);
//echo $dateToDayId;
//$dishIdToMealId = $data["calendar"]["dishIdToMealId"];
$mealIdToDayId = $data["calendar"]["mealIdToDayId"];
$daysWithDetails = $data["calendar"]["daysWithDetails"];
foreach($dateToDayId as $date => $dayId) {
	//var_dump($day);

	
		echo '<a href=" '.htmlspecialchars("userID.php?data=".urldecode($dayId)).'">'.$date.'<br>';


		

}
?>
