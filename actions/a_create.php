<?php require_once 'db_connect.php';

if($_POST){
    $meal_name = $_POST['meal_name'];
    $ingredients_1 = $_POST['ingredient_1'];
    $ingredients_2 = $_POST['ingredient_2'];
    $ingredients_3 = $_POST['ingredient_3'];
    $allergens = $_POST['allergens'];
    $price = $_POST['price'];
    $image_link = $_POST['image_link'];
    // $foreign = $_POST['fk_ingredient']


    $sql_ing ="INSERT INTO ingredients (ingredient_1, ingredient_2, ingredient_3)
    VALUES ('$ingredients_1','$ingredients_2','$ingredients_3')";

    if($connect->query($sql_ing)===TRUE) {
        echo "Success ingredients <br>";
        echo "<a href='../index.php'><button type='button'>HOME</button></a> <br>";
        echo "<a href='../create.php'><button type='button'>BACK</button></a> <br>";
    } else {
        echo "not succesfull ingredients <br>";
    }

    $last_id = $connect->insert_id;

    $sql = "INSERT INTO meals (meal_name, allergens, price, image_link, fk_ingredient)
    VALUES ('$meal_name','$allergens','$price','$image_link', '$last_id')";

    if($connect->query($sql)===TRUE) {
        echo "Success meals <br>";
        echo "<a href='../index.php'><button type='button'>HOME</button></a> <br>";
        echo "<a href='../create.php'><button type='button'>BACK</button></a> <br>";
    } else {
        echo "not succesfull meals <br>";
    }


}

$connect->close();


// WE ARE PROUD TO PRESENT OUR OWN WRITTEN SCRIPT WITHOUT USING PREWORK!!!! GET GOOD KIDS
