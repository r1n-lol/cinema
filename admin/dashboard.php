<?php
require_once __DIR__ . '/../config/init.php';
require_once 'auth.php';
$title = 'Админ панель';
$pageCss = 'admin';
include '../partials/header.php';
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="container">
        <?php include 'partials_admin/add_movie_form.php'; ?>
        <?php include 'partials_admin/movies_table.php'; ?>
    </div>

    <?php include '../partials/footer.php'; ?>
</body>

</html>