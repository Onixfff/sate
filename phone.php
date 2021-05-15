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
    <label>Почта</label>
    <input name="email" type="email" pattern="[A-Za-z0-9]{4,}@[a-z]{2,}\.[a-z]{2,}" placeholder="Пример: danilnikonov01@mail.ru">
    <label>Телефон</label>
    <input name='full_name' type="text" pattern="7[\-\s][0-9]{3}[\-\s]{1}[0-9]{3}[\-\s]{1}[0-9]{4}" placeholder="7 xxx xxx xxxx">
    <button onclick = "myFunction()">Заказать звонок</button>
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