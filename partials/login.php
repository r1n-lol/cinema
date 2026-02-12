<?php
require_once '../config/init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $res = $con->query($sql);
    $user = $res->fetch_assoc();

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_role'] = $user['role'];

        if ($user['role'] === 'admin') {
            header('Location: /admin/dashboard.php');
            exit;
        } else {
            header('Location: /');
            exit;
        }
    } else {
        echo "Неверный логин или пароль";
    }
}
?>

