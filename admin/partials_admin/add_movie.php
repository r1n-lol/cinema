<?php
require_once __DIR__ . '/../../config/init.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $genre_id = $_POST['genre_id'];
    $show_date = $_POST['show_date'];
    $age_rating = $_POST['age_rating'];

    $image_path = "";
    if (!empty($_FILES['image']['name'])) {
        $image_path = "uploads/" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . "/../../" . $image_path);
    }

    $sql = "INSERT INTO movies (title, description, price, genre_id, show_date, age_rating, image_path)
            VALUES ('$title', '$description', '$price', '$genre_id', '$show_date', '$age_rating', '$image_path')";

    $con->query($sql);

    header("Location: ../dashboard.php");
    exit;
}
