<?php
require_once '../config/init.php';
$title = 'О нас';
$pageCss = '/about';
include '../partials/header.php';

// 5 последних сеансов
$result = $con->query("SELECT * FROM movies ORDER BY created_at DESC LIMIT 5");
?>

<body class="about__body">
    <div class="container">
        <div class="about__content">
            <div class="about__main">
                <div class="about__logo">
                    <p class="about__logo-text"><span class="about__logo-NE">Ne</span>NetFlix</p>
                </div>

                <div class="about__slogan">
                    <p class="about__slogan-text">
                        Онлайн-касса, где каждый билет — это шаг в мир эмоций,<br>
                        приключений и незабываемых историй на большом экране.
                    </p>
                </div>
            </div>
        </div>

        <div class="about__line-block">
            <div class="about__line"></div>
        </div>

        <div class="about__newseans">
            <p class="about__newseans-txt">Новые сеансы</p>
        </div>

        <!-- Блок новых сеансов -->
        <div class="new-seans-grid">
            <?php while ($movie = $result->fetch()): ?>
                <a href="/page/movie_single.php?id=<?= $movie['id']; ?>" class="new-seans-card">
                    <img src="/<?= $movie['image_path']; ?>" alt="<?= $movie['title']; ?>" class="new-seans-img">
                    <div class="new-seans-title"><?= $movie['title']; ?></div>
                </a>
            <?php endwhile; ?>
        </div>

    </div>

<?php include '../partials/footer.php'; ?>
</body>
