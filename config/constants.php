<?php

    //start session
    session_start();

    // constatnt to store non repeating values
    define('SITEURL','http://localhost/food-order/');
    define('LOCALHOST','localhost');
    define('DB_USERNMAE','root');
    define('DB_PASSWORD','');
    define('DB_NAME','food-order');
    $conn = mysqli_connect(LOCALHOST,DB_USERNMAE,DB_PASSWORD) or die(mysqli_error($conn));// database connection
    $db_select = mysqli_select_db($conn,DB_NAME) or  die(mysqli_error($conn));
?>