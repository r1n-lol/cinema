<?php
$host = "db";
$user = "root";
$pass  = "rootpassword";
$db = "user";

$con =  mysqli_connect($host, $user, $pass, $db);

if($con->connect_error){
    die("Ошибка подключения:" . $con->connect_error);
}


