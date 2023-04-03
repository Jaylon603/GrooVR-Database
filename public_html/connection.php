<?php
try  {
    require_once("dbconfig.php"); //database access details

    //Populate these four variables
    $host = "localhost:3306";//Domain name of database server
    $dbname = "jenorris";//name of your database
    $username = "jenorris";//SQL user
    $options = null;

    configure($host, $username, $password, $options, $dbname, $dsn);

    $connection = new PDO($dsn, $username, $password, $options); //create database connection and get handler
    echo "Connected Successful";
} catch(PDOException $error) {
    //if connection failed, print error and exit;
    echo "Database connection error: " . $error->getMessage() . "<BR>";
    die;
}
?>
