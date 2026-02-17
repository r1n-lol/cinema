<?php
require_once __DIR__ . '/../config/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="/css/common.css">
    <title> <?= isset($title) ? $title : 'Ошибка' ?></title>

    <?php if (!empty($pageCss)) : ?>
        <link rel="stylesheet" href="/css/<?= $pageCss ?>.css">
    <?php endif; ?>
</head>

<body class="header__body">
    <div class="conteiner">
        <header class="header">
            <div class="content-wrapper">
                <div class="header__inner">


                    <div class="header__logo">
                        <a href="/index.php" class="header__logo-link">
                            <p class="header__logo-text"><span class="header__logo-NE">Ne</span>NetFlix</p>
                        </a>
                    </div>


                    <div class="header__nav-wrapper">
                        <nav class="header__nav">
                            <a href="/page/about.php" class="header__nav-link">О нас</a>
                            <a href="/page/movie.php" class="header__nav-link">Афиша</a>
                            <a href="/page/contact.php" class="header__nav-link">Где нас найти?</a>

                        </nav>
                    </div>



                    <div class="header__spacer">
                        <?php if (isset($_SESSION['user_id'])) : ?>

                            <!-- Корзина -->
                            <a href="/cart.php" class="header__nav-btn">
                                Корзина
                            </a>

                            <!-- Админ -->
                            <?php if ($_SESSION['user_role'] === 'admin') : ?>
                                <a href="/admin/dashboard.php" class="header__nav-btn">
                                    Панель
                                </a>
                            <?php endif; ?>

                            <!-- Выйти -->
                            <a href="/partials/logout.php" class="header__nav-btn">
                                Выйти
                            </a>

                        <?php else : ?>

                            <!-- Если не вошёл -->
                            <a href="/partials/auth.php" class="header__nav-btn">
                                Войти
                            </a>

                        <?php endif; ?>
                    </div>



                </div>
            </div>
        </header>
    </div>
    <!-- <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
</body>

</html>