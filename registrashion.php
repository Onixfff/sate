<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/registrashion.css">
</head>
<body>
    <form class="form" action="assets/PHP/ee.php" method="POST">
    <label>ФИО</label>
    <input name='full_name' type="text" pattern="[А-ЯЁ][а-яё]{3,}[\-\s]{1}[А-ЯЁ][а-яё]{3,}[\-\s]{1}[А-ЯЁ][а-яё]{3,}" placeholder="Пример: Никонов Даниил Олегович">
    <label>Логин</label>
    <input name='login' type="text" pattern="[A-Za-z0-9]{6,20}" placeholder="Ввведите логин">
    <label>Почта</label>
    <input name="email" type="email" pattern="[A-Za-z0-9]{4,}@[a-z]{2,}\.[a-z]{2,}" placeholder="Пример: danilnikonov01@mail.ru">
    <label>Пароль</label>
    <input type="password" id="id1" name="password" pattern="[A-Za-z0-9-.$%]{6,}" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" id="id2" name="repit_password" pattern="[A-Za-z0-9-.$%]{6,}" placeholder="Повторите пароль">
    <button onclick = "myFunction()">Зарегистрироваться</button>
    если вы уже зарегистрированы <a href="vhod.php">войдите</a>
    <?php
    if($_SESSION['message'])
    {
        echo '<p class = "msg">'.$_SESSION['message'].'</p>';
    }
    unset($_SESSION['message']);
    ?>
    </form>
</body>
</html>