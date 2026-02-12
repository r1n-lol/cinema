<?php
require_once __DIR__ . '/../../config/init.php';

$result = $con->query("SELECT m.*, g.name AS genre_name 
                       FROM movies m 
                       JOIN genres g ON m.genre_id = g.id");
?>


<div class="container">

    <h2>Список фильмов</h2>
    <table class="admin-table">
        <thead>
            <tr>
                <th>Постер</th>
                <th>Название</th>
                <th>Жанр</th>
                <th>Цена</th>
                <th>Дата</th>
                <th>Рейтинг</th>
                <th>Действия</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <tr>
                    <td><img src="/<?= $row['image_path']; ?>" class="poster"></td>
                    <td><?= $row['title']; ?></td>
                    <td><?= $row['genre_name']; ?></td>
                    <td><?= $row['price']; ?> ₽</td>
                    <td><?= $row['show_date']; ?></td>
                    <td><?= $row['age_rating']; ?></td>
                    <td>
                        <a href="edit_movie.php?id=<?= $row['id']; ?>">✏️</a>
                        <a href="partials_admin/delete_movie.php?id=<?= $row['id']; ?>">❌</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>