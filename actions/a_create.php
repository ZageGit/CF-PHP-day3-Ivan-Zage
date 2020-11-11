<?php require_once 'db_connect.php';

if($_POST){
    $meal_name = $_POST['meal_name'];
    $ingredients = $_POST['ingredients'];
    $allergens = $_POST['allergens'];
    $price = $_POST['price'];
    $image_link = $_POST['image_link'];

    $sql = "INSERT INTO meals (meal_name, ingredients, allergens, price, image_link)
    VALUES ('$meal_name','$ingredients','$allergens','$price','$image_link')";

    if($connect->query($sql)===TRUE) {
        echo "Success";
        echo "<a href='../index.php'><button type='button'>HOME</button></a>";
        echo "<a href='../create.php'><button type='button'>BACK</button></a>";
    } else {
        echo "not succesfull";
    }
}

$connect->close();


// WE ARE PROUD TO PRESENT OUR OWN WRITTEN SCRIPT WITHOUT USING PREWORK!!!! GET GOOD KIDS