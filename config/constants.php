<?php
    //Start Session
    session_start();
    //here all about data connection with our website
    
    //Create Constants to Stroe Non Repeating Values
    define('SITEURL','http://localhost/food-order/');
    define('LOCALHOST','localhost');
    define('DB_USERNANE','root');
    define('DB_PASSWORD','');
    define('DB_NAME','food-order');

    $conn = mysqli_connect(LOCALHOST, DB_USERNANE, DB_PASSWORD) or die(mysqli_error()); //Database Connection
      
    $db_select = mysqli_select_db($conn, DB_NAME) or di(mysqli_error()); //Selecting Database
?>