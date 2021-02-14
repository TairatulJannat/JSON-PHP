<?php
//require 'json2.php';
$dayId = $_GET['data'];
//$u_id = $_GET['user'];
//echo $u_id;

$data = file_get_contents("7.json"); 
$data = json_decode($data, true);
$daysWithDetails = $data["calendar"]["daysWithDetails"];
$dishIdToMealId = $data["calendar"]["dishIdToMealId"];
//$day = $daysWithDetails[$dayId];
$mealId = array_search($dayId, $data["calendar"]["mealIdToDayId"]);

echo '<h4> Day Id: '.$dayId.'</h4><br>';
echo '<h4> Meal Id: '.$mealId.'</h4>';
echo "<pre>";
// var_dump($daysWithDetails[$dayId]["details"]["mealsWithDetails"][$mealId]["details"]["dishes"]);

foreach ($daysWithDetails[$dayId]["details"]["mealsWithDetails"][$mealId]["details"]["dishes"] as $dishId => $dish) {
	echo "<p>Dish Name : ".$dish['name']."</p><br>";
	// var_dump($dish);
}

$entities = $data['entities']['comments']['comments'];
foreach ($entities as $cid => $comments) {
	//var_dump($cid);
	$comment_id = $cid;
	$entityType = $data['entities']['comments']['comments'][$cid]['entityType'];
	$Text = $data['entities']['comments']['comments'][$cid]['text'];
	$userId =  $data['entities']['comments']['comments'][$cid]['userId'];
	if ($userId == 7) {
		// echo '<p>User ID : '.$userId. '<br>';
	echo '<p>Review : '.$Text.'<br>';
	}
	
}
?>