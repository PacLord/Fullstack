<?php
session_start();


require '../templates/header.php'; //подключаем хэдер в котором хранятся параметры подключения к базе данных
// получаем переменные из предыдущей формы user.php
$userId = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];
$city_id = $_POST['city_id'];


//делаем запрос на редактирование данных в базу
$query = "UPDATE users SET name = :name, city_id = :city_id, login = :login WHERE id = :id";
$res = $pdo->prepare($query);
$status = $res->execute([
    ':id' => $userId,
    ':login' => $login,
    ':name' => $name,
    ':city_id' => $city_id,
]);

if (!$status) {
    $error = $res->errorInfo()[2];
    $_SESSION['error'] = $error;
} else {
    $_SESSION['success'] = true;
}

header("Location: ../pages/user.php?id=$userId");