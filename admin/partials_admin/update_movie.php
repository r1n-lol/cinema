<?php
require_once __DIR__ . '/../../config/init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = (int)$_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // получаем текущий genre_id
    $res = $con->query("SELECT image_path, genre_id FROM movies WHERE id = $id");
    $movie = $res->fetch_assoc();
    $image_path = $movie['image_path'];

    // если в форме пришёл genre_id
    $genre_id = isset($_POST['genre_id']) ? (int)$_POST['genre_id'] : $movie['genre_id'];

    if (!empty($_FILES['image']['name'])) {
        $image_path = "uploads/" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . "/../../" . $image_path);
    }

    $sql = "
        UPDATE movies SET
            title = '$title',
            description = '$description',
            price = '$price',
            genre_id = $genre_id,
            image_path = '$image_path'
        WHERE id = $id
    ";

    $con->query($sql);

    header('Location:/admin/dashboard.php');
    exit;
}



