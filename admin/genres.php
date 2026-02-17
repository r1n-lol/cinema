<?php
require_once __DIR__ . '/../config/init.php';
require_once 'auth.php';

// ОБРАБОТКА ФОРМЫ 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_genre'])) {
    $name = $_POST['genre_name'];
    $con->query("INSERT INTO genres (name) VALUES ('$name')");
    header("Location: genres.php");
    exit;
}

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $con->query("DELETE FROM genres WHERE id = $id");
    header("Location: genres.php");
    exit;
}

$title = 'Жанры';
$pageCss = 'admin';
include '../partials/header.php';

// Получаем все жанры
$genres = $con->query("SELECT * FROM genres");
?>

<div class="container">
    <h2>Жанры</h2>

    <form method="post" class="admin-form">
        <div class="form-row">
            <label>Добавить жанр</label>
            <input type="text" name="genre_name" required>
        </div>
        <button type="submit" name="add_genre">Добавить</button>
    </form>

    <h3>Список жанров</h3>
    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($g = $genres->fetch_assoc()): ?>
            <tr>
                <td><?= $g['id'] ?></td>
                <td><?= $g['name'] ?></td>
                <td>
                    <a href="genres.php?delete=<?= $g['id'] ?>">❌ </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include '../partials/footer.php'; ?>

