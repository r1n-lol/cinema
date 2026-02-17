<?php
require_once __DIR__ . '/../config/init.php';
require_once 'auth.php';
$title = 'Редактирование фильма';
$pageCss = 'admin';
include '../partials/header.php';

$id = (int)$_GET['id'];

$result = $con->query("SELECT * FROM movies WHERE id = $id");
$movie = $result->fetch();

$genres = $con->query("SELECT * FROM genres");

if (!$movie) {
    die('Фильм не найден');
}
?>

<div class="container">
    <h2>Редактировать фильм</h2>

    <form method="post" action="partials_admin/update_movie.php" enctype="multipart/form-data" class="admin-form">

        <input type="hidden" name="id" value="<?= $movie['id']; ?>">

        <div class="form-row">
            <label>Название</label>
            <input type="text" name="title" value="<?= htmlspecialchars($movie['title']); ?>" required>
        </div>

        <div class="form-row">
            <label>Описание</label>
            <textarea name="description"><?= htmlspecialchars($movie['description']); ?></textarea>
        </div>

        <div class="form-row">
            <label>Цена</label>
            <input type="number" name="price" value="<?= $movie['price']; ?>" required>
        </div>

        <div class="form-row">
            <label>Жанр</label>
            <select name="genre_id" class="custom-select" required>
                <?php
                $genresResult = $con->query("SELECT * FROM genres");
                while ($g = $genresResult->fetch()) {
                    $selected = ($movie['genre_id'] == $g['id']) ? 'selected' : '';
                    echo "<option value='{$g['id']}' $selected>{$g['name']}</option>";
                }
                ?>
            </select>
        </div>


        <div class="form-row">
            <label>Дата сеанса</label>
            <input type="date" name="show_date" value="<?= $movie['show_date']; ?>" required>
        </div>

        <div class="form-row">
            <label>Возрастной рейтинг</label>
            <input type="text" name="age_rating" value="<?= $movie['age_rating']; ?>" required>
        </div>

        <div class="form-row">
            <label>Текущий постер</label>
            <img src="/<?= $movie['image_path']; ?>" class="poster">
        </div>

        <div class="form-row">
            <label>Новый постер (необязательно)</label>
            <input type="file" name="image">
        </div>

        <button type="submit">Сохранить изменения</button>
    </form>
</div>

<?php include '../partials/footer.php'; ?>