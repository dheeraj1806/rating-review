<?php
include_once("db.php");
if(!empty($_POST['rating']) && !empty($_POST['itemId'])){
	$itemId = $_POST['itemId'];
	$userID = 12345678;		
	$insertRating = "INSERT INTO item_rating (itemId, userId, ratingNumber, title, comments, created) VALUES ('".$itemId."', '".$userID."', '".$_POST['rating']."', '".$_POST['title']."', '".$_POST["comment"]."', '".date("Y-m-d H:i:s")."')";
	mysqli_query($con, $insertRating) or die("database error: ". mysqli_error($con));		
	echo "rating saved!";
}
?>