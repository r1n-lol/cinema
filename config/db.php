<?php
// $host = "db";
// $user = "root";
// $pass  = "rootpassword";
// $db = "user";

// $con =  mysqli_connect($host, $user, $pass, $db);

// if($con->connect_error){
//     die("Ошибка подключения:" . $con->connect_error);
// }

try {
    $con = new PDO(
        'mysql:host=db; dbname=user;charset=utf8mb4',
        'root',
        'rootpassword',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false

        ]
    );
    // echo"Подключение успешно!";
} catch(PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}
