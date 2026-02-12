<?php
require_once '../config/init.php';
$title = 'Вход';
$pageCss = '/reg';
include '../partials/header.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>

<div class="auth">
    <form class="auth__form" action="register.php" method="post" id="registerForm">
        <h1 class="auth__title">Регистрация</h1>

        <div class="auth__errors" id="errors"></div>

        <div class="auth__field">
            <label>Имя</label>
            <input type="text" id="name" name="name">
        </div>

        <div class="auth__field">
            <label>Фамилия</label>
            <input type="text" id="surname" name="surname">
        </div>

        <div class="auth__field">
            <label>Отчество</label>
            <input type="text" id="patronymic" name="patronymic">
        </div>

        <div class="auth__field">
            <label>Логин</label>
            <input type="text" id="login" name="login">
        </div>

        <div class="auth__field">
            <label>Email</label>
            <input type="email" id="email" name="email">
        </div>

        <div class="auth__field">
            <label>Пароль</label>
            <input type="password" id="password" name="password">
        </div>

        <div class="auth__field">
            <label>Повторите пароль</label>
            <input type="password" id="password_repeat" name="password_repeat">
        </div>

        <div class="auth__checkbox">
            <input type="checkbox" id="rules">
            <label for="rules">Я согласен с правилами регистрации</label>
        </div>

        <button class="auth__btn" type="submit">Зарегистрироваться</button>
    </form>
</div>

<?php include 'partials/footer.php'; ?>
</body>
</html>
