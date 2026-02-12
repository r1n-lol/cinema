<?php
require_once __DIR__ . '/../../config/init.php';

// получаем жанры
$genres = $con->query("SELECT * FROM genres");
?>


<div class="container">

<h2>Добавить фильм</h2>
    <form method="post" action="partials_admin/add_movie.php" enctype="multipart/form-data" class="admin-form">
        <div class="form-row">
            <label>Название фильма</label>
            <input type="text" name="title" required>
        </div>

        <div class="form-row">
            <label>Описание</label>
            <textarea name="description"></textarea>
        </div>

        <div class="form-row">
            <label>Цена билета</label>
            <input type="number" name="price" required>
        </div>

        <div class="form-row">
            <label><a href="genres.php" class="header__nav-generes">Жанры</a></label>
            <select name="genre_id">
                <?php while ($g = $genres->fetch_assoc()): ?>
                    <option value="<?= $g['id'] ?>"><?= $g['name'] ?></option>
                <?php endwhile; ?>
            </select>
        </div>

        <div class="form-row">
            <label>Дата сеанса</label>
            <input type="date" name="show_date" required>
        </div>

        <div class="form-row">
            <label>Возрастной рейтинг</label>
            <input type="text" name="age_rating" value="0+" required>
        </div>

        <div class="form-row">
            <label>Постер</label>
            <input class="input_file" type="file" name="image">
        </div>

        <button type="submit">Добавить фильм</button>

    </form>
</div>