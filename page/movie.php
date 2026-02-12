<?php
require_once '../config/init.php';
$title = 'Афиша';
$pageCss = '/movie';
include '../partials/header.php';

// сортировка
$sort = $_GET['sort'] ?? 'new';
$order = "ORDER BY m.created_at DESC";

if ($sort === 'date') {
    $order = "ORDER BY m.show_date ASC";
} elseif ($sort === 'title') {
    $order = "ORDER BY m.title ASC";
} elseif ($sort === 'age') {
    $order = "ORDER BY m.age_rating ASC";
}

// фильтр по жанру
$genre_id = $_GET['genre'] ?? '';
$genreSql = $genre_id ? "AND m.genre_id = $genre_id" : '';

// показываем только сеансы, не старше текущей даты
$today = date('Y-m-d');

$sql = "
    SELECT m.*, g.name AS genre_name
    FROM movies m
    JOIN genres g ON m.genre_id = g.id
    WHERE m.show_date >= '$today'
    $genreSql
    $order
";

$result = $con->query($sql);

// Жанры из базы
$genresResult = $con->query("SELECT * FROM genres");
$genres = [];
while ($g = $genresResult->fetch_assoc()) {
    $genres[] = $g;
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Афиша</title>
    <link rel="stylesheet" href="/styles/movie.css">
</head>

<body>

    <div class="page">
        <h1 class="page-title">Афиша</h1>

        <div class="filters">
            <div class="filters-left">
                <span>Сортировать:</span>

                <a href="?sort=new&genre=<?= $genre_id ?>" class="btn <?= $sort == 'new' ? 'active' : '' ?>">По новизне</a>
                <a href="?sort=date&genre=<?= $genre_id ?>" class="btn <?= $sort == 'date' ? 'active' : '' ?>">По дате</a>
                <a href="?sort=title&genre=<?= $genre_id ?>" class="btn <?= $sort == 'title' ? 'active' : '' ?>">По названию</a>
                <a href="?sort=age&genre=<?= $genre_id ?>" class="btn <?= $sort == 'age' ? 'active' : '' ?>">По возрасту</a>
            </div>

            <form method="get" class="genre-form">
                <label class="genre-label">Жанр</label>

                <select name="genre" class="custom-select" onchange="this.form.submit()">
                    <option value="">Все</option>
                    <?php foreach ($genres as $g): ?>
                        <option value="<?= $g['id'] ?>" <?= $genre_id == $g['id'] ? 'selected' : '' ?>>
                            <?= $g['name'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <input type="hidden" name="sort" value="<?= $sort ?>">
            </form>
        </div>

        <div class="cards">
            <?php while ($movie = $result->fetch_assoc()): ?>
                <a href="/page/movie_single.php?id=<?= $movie['id'] ?>" class="card">
                    <img src="/<?= $movie['image_path'] ?>" class="card-img" alt="<?= $movie['title'] ?>">
                    <div class="card-info">
                        <div class="card-title"><?= $movie['title'] ?></div>
                        <div class="card-meta">
                            <span class="card-price"><?= $movie['price'] ?> ₽</span>
                            <span class="card-age"><?= $movie['age_rating'] ?></span>
                            <span class="card-date"><?= date('d.m.Y', strtotime($movie['show_date'])) ?></span>
                        </div>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
    <?php include '../partials/footer.php'; ?>

</body>

</html>