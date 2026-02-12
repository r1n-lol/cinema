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

    <div id="myCarousel" class="carousel slide mt-2" data-bs-ride="carousel">
        <!-- Индикаторы -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"></button>
        </div>

        <!-- Слайды -->
        <div class="carousel-inner ">
            <div class="carousel-item active ">
                <img src="media/images/interst-2.jfif" class=" img-carousel d-block w-100 " alt="...">
            </div>
            <!-- <div class="carousel-item">
                <img src="media/images/" class="img-carousel d-block w-100 " alt="...">
            </div> -->
        </div>

        <!-- Кнопки управления -->
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

<?php include 'partials/footer.php'; ?>

</body>

</html>