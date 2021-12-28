<?php
session_start();
require '../templates/header.php'; //подключаем хэдер в котором хранятся параметры подключения к базе данных

$userId = $_GET['id'];
// делаем запрос к базе получаем пользователя по id
$query = 'SELECT * FROM users WHERE id = :id';
$res = $pdo->prepare($query);
$res->execute([
    ':id' => $userId
]);

$user = $res->fetch();
// если пользователь существует получаем все города
if ($user) {

$query = "SELECT * FROM cities";
$res = $pdo->query($query);
$cities = $res->fetchAll();

if (isset($_SESSION['error'])) {
    echo 
    "
    <div class='alert alert-danger text-center' role='alert'>
        {$_SESSION['error']}
    </div>
    ";
    unset($_SESSION['error']);
} else if (isset($_SESSION['success'])) {
    echo 
    "
    <div id='alertSuccess' class='alert alert-success text-center' role='alert'>
        Данные успешно обновлены!
    </div>
    ";
    unset($_SESSION['success']);
}

?>
<!-- форма редактирования данных -->
        <form method="post" action="../actions/update_user.php"> <!-- при нажатии кнопки СОХРАНИТЬ переходим на страницу update_user.php -->
            <label>Имя</label>
            <input name='id' hidden value='<?=$user['id']?>'>
            <input class="form-control mb-2" name='name' value='<?=$user['name']?>'>
            <label>Логин</label>
            <input class="form-control mb-2" name='login' value='<?=$user['login']?>'>
            <label>Город</label>
            <!-- Делаем select со всеми городами -->
            <select class="form-control mb-2" name="city_id"> 
                <?php 
                    if (!$user['city_id']) { //если город не выбран выводим ---- Выберите город ----
                        echo '<option selected disabled>-- Выберите город --</option>';
                    }
                    foreach ($cities as $city) { //если город выбран выводим его
                        $selected = $city['id'] == $user['city_id'] ? 'selected' : '';
                        echo "<option $selected value='{$city['id']}'>{$city['name']}</option>";
                    }
                ?>
            </select>
            <br>
            <button type='submit' class="btn btn-success w-100">СОХРАНИТЬ</button>
        </form>

        <?php
        } else { // если id пользователя не существует выводим "Пользователь не найден"
            echo
            '
            <div class="alert alert-warning" role="alert">
                Пользователь не найден
            </div>
            ';
        }
        ?>

    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#alertSuccess').fadeOut()
            }, 3000)
        })
    </script>

<?php

require '../templates/footer.php';