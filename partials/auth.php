<?php
require_once '../config/init.php';
$title = 'Вход';
$pageCss = '/auth';
include '../partials/header.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>

<div class="auth">
    <form class="auth__form" action="login.php" method="post" id="loginForm">
        <h1 class="auth__title">Вход в систему</h1>

        <div class="auth__errors" id="errors"></div>

        <div class="auth__field">
            <label for="login">Логин</label>
            <input type="text" id="login" name="login">
        </div>

        <div class="auth__field">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password">
        </div>

        <button class="auth__btn" type="submit">Войти</button>
        <a href="reg.php" class="auth__link">Нет аккаунта?</a>
    </form>
</div>


<?php include 'partials/footer.php'; ?>
</body>
</html>
