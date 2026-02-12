<?php
require_once '../config/init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, surname, patronymic, login, email, password)
            VALUES ('$name', '$surname', '$patronymic', '$login', '$email', '$password')";

    $con->query($sql);

    header('Location: /partials/auth.php');
    exit;
}

