<?php
require_once '../config/init.php';
$title = 'Где нас найти?';
$pageCss = '/contact';
include '../partials/header.php';
?>

<body class="contact__body">

    <div class="container">
        <div class="contact__content">
            <div class="adress_content">
                <div class="adress">
                    <p class="adres-title">Наш адресс:</p>
                    <p class="adres-txt">г.Москва, ул.Мечникова, д.54.</p>
                </div>
            </div>
            <div class="contact_text_content">
                <div class="contact">
                    <p class="contact-title">Телефоны:</p>
                    <p class="contact-txt">
                        Касса кинотеатра: +7 (836-2) 38-38-00 <br>
                        Офис (маркетолог): +7 (836-2) 38-58-59
                    </p>
                </div>
            </div>
            <div class="email_content">
                <div class="email">
                    <p class="email-title">Email:</p>
                    <p class="email-txt">nenetflix@mail.ru</p>
                </div>
            </div>

            <div class="map_content">
                <div class="map">
                    <p class="map-title">Карта:</p>
                    <div class="map-img"><img class="map-img" src="../media/images/map.jpg" alt=""></div>
                </div>
            </div>


        </div>
    </div>

    <?php include '../partials/footer.php'; ?>

</body>