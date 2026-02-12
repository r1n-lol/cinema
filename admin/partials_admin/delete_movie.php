<?php
require_once __DIR__ . '/../../config/init.php';

$id = $_GET['id'];

$con->query("DELETE FROM movies WHERE id = $id");

echo "Фильм удален!! <a href='../dashboard.php'> На страницу </a>";
exit;
?>