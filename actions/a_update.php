<?php

require_once 'db_connect.php';

if ($_POST['id']) {
	
	$id = $_POST['id'];

	$meal_name = $_POST['meal_name'];
	$ingredients = $_POST['ingredients'];
	$allergens = $_POST['allergens'];
	$price = $_POST['price'];
	$image_link = $_POST['image_link'];

	$sql = "UPDATE `meals` SET `meal_name`= '$meal_name',`ingredients`='$ingredients',`allergens`='$allergens',`price`='$price',`image_link`='$image_link' WHERE id = {$id}";
	// $result = $connect->query($sql);

	if ($connect->query($sql) === TRUE) {
		echo "update succesfull!";
		echo "<a href='../update.php?id=" . $id ."'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "failed" . $connect->error;
	}

	$connect->close();
}

?>




