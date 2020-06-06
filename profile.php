<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Росатом Госкорпорация «Росатом» ядерные технологии атомная энергетика АЭС ядерная медицина ядерное машиностроение ядерное топливо атомный ледокол добыча урана ветроэнергетика цифровизация</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/rosatom-1.png" type="image/x-icon">
</head>
<body>
<a href="back/logout.php"><button class="btn btn-danger">Выход</button></a>
<div class="div" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);">
<h2 style="color: white">Вы в личном кабинете!</h2>
<h3 style="color: white"><?=$_SESSION['user']['email']?></h3>
</div>
</body>
<script src="js/jQuery.js"></script>
<script src="js/main.js"></script>
</html>