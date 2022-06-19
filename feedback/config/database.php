<?php
define('DB_HOST','localhost');
define('DB_USER','brad');
define('DB_PASS','12345');
define('DB_NAME','php_dev');

//create connection
$conn =new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//CHECK if connection
if($conn->connect_error){
    die("Error connecting to database".$conn->connect_error);
}
