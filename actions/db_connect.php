<?php

$localhost = "localhost";
$username ="root";
$password = "";
$dbname = "meal_exercise";


//create connection

$connect = new mysqli ($localhost, $username,$password, $dbname);
// $connect = mysqli_connect($localhost, $username,$password, $dbname);

//check connection

if($connect->connect_error) {
    die ("Connection failed: " . $connect->connect_error);
} else {
    echo "Succesfully connected";
}