<?php
require_once 'config/init.php';
$title = 'Главная';
$pageCss = 'index';
include 'partials/header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <!-- Индикаторы -->
    <!-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
        </div> -->

    <div class="slider">
        <div class="slide">
            <div class="image-wrap">
                <img src="media/images/кинозал.jfif" alt="Кинозал">
            </div>
            <div class="slide-caption">
                <h1 class="slide-logo">Ne<span>NetFlix</span></h1>
                <p class="slide-p">Современные кинозалы и низкие цены</p>
                <a href="page/contact.php" class="slide-btn">Подробнее</a>
            </div>

        </div>
        <div class="slide">
            <div class="image-wrap">
                <img src="media/images/interst-2.jfif" alt="Интерстеллар">
            </div>
        </div>
        <div class="slide">
            <div class="image-wrap">
                <img src="media/images/осд.jpg" alt="Следующая">
            </div>
        </div>

        <button id="left-btn" class="nav-btn"><img src="media/images/left.png" alt=""></button>
        <button id="right-btn" class="nav-btn"><img src="media/images/right.png" alt=""></button>
    </div>

    <?php include 'partials/footer.php'; ?>
    <script src="js/slider.js"></script>

</body>

</html>