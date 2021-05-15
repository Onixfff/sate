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
    <label>Логин</label>
    <input name='login' type="text" pattern="[A-Za-z0-9]{6,20}" placeholder="Ввведите логин">
    <label>Пароль</label>
    <input type="password" id="id1" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" id="id2" name="repit_password" placeholder="Повторите пароль">
    <button onclick = "myFunction()">Войти</button>
    если вы ещё не зарегистрированы <a href="registrashion.php">Зарегестрироваться</a>
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