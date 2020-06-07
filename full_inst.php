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
    <link rel="stylesheet" href="style1.css">
    <link rel="shortcut icon" href="/img/rosatom-1.png" type="image/x-icon">
</head>
<body>
<a href="download.php" style="color: #FFFFFF; background-color: #0000cc; padding: 5px 15px; border: none; text-decoration: none; position: absolute; top: 20px; left: 20px;">Скачать в PDF</a>
    <?php

$filename = $_GET['filename'];

    $fileContents = file($filename);
    echo '<div class="inst_div" style="position: absolute;left: 50%;transform: translate(-50%,0)">';
$pattern = "/I. Общие положения/";
$linesFound = preg_grep($pattern, $fileContents);
$first = array_keys($linesFound)[0] . '</br>';
    $first += 2;
$pattern = "/II. Должностные обязанности/";
$linesFound = preg_grep($pattern, $fileContents);
$second = array_keys($linesFound)[0] . '</br>';
$second -= 3;

$fd = fopen($filename, 'r') or die("не удалось открыть файл");
$i = 0;
$str = '';
$text = [];
$txt = '';
while (!feof($fd)) {
    $str = htmlentities(fgets($fd));
    if ($i >= $first && $i <= $second) {
        array_push($text, $str);
        $txt .= $str;
        $txt .= "<br>";
    }
    $i++;
}
fclose($fd);

    echo '<div class="text_div" style="width: 1000px;"><h1 class="instr" >Общие положения : '.$pos.'</h1></div>';
foreach ($text as $el) {
    echo '<p class="elOfText" style="width: 1000px;">'.$el.'</p>';

}
    $pattern = "/II. Должностные обязанности/";
    $linesFound = preg_grep($pattern, $fileContents);
    $first = array_keys($linesFound)[0] . '</br>';
    $first += 2;
    $pattern = "/III. Права/";
    $linesFound = preg_grep($pattern, $fileContents);
    $second = array_keys($linesFound)[0] . '</br>';
    $second -= 3;

    $fd = fopen($filename, 'r') or die("не удалось открыть файл");
    $i = 0;
    $str = '';
    $text = [];
    $txt = '';
    while (!feof($fd)) {
        $str = htmlentities(fgets($fd));
        if ($i >= $first && $i <= $second) {
            array_push($text, $str);
            $txt .= $str;
            $txt .= "<br>";
        }
        $i++;
    }
    fclose($fd);

    echo '<div class="text_div" style="width: 1000px;"><h1 class="instr" >Должностные обязанности : '.$pos.'</h1></div>';
    foreach ($text as $el) {
        echo '<p class="elOfText" style="width: 1000px;">'.$el.'</p>';

    }
    $pattern = "/III. Права/";
    $linesFound = preg_grep($pattern, $fileContents);
    $first = array_keys($linesFound)[0] . '</br>';
    $first += 2;
    $pattern = "/ IV. Ответственность/";
    $linesFound = preg_grep($pattern, $fileContents);
    $second = array_keys($linesFound)[0] . '</br>';
    $second -= 3;

    $fd = fopen($filename, 'r') or die("не удалось открыть файл");
    $i = 0;
    $str = '';
    $text = [];
    $txt = '';
    while (!feof($fd)) {
        $str = htmlentities(fgets($fd));
        if ($i >= $first && $i <= $second) {
            array_push($text, $str);
            $txt .= $str;
            $txt .= "<br>";
        }
        $i++;
    }
    fclose($fd);

    echo '<div class="text_div" style="width: 1000px;"><h1 class="instr" >Права : '.$pos.'</h1></div>';
    foreach ($text as $el) {
        echo '<p class="elOfText" style="width: 1000px;">'.$el.'</p>';

    }
    $pattern = "/IV. Ответственность/";
    $linesFound = preg_grep($pattern, $fileContents);
    $first = array_keys($linesFound)[0] . '</br>';
    $first += 2;
    $pattern = "/Должностная инструкция разработана в соответствии/";
    $linesFound = preg_grep($pattern, $fileContents);
    $second = array_keys($linesFound)[0] . '</br>';
    $second -= 3;

    $fd = fopen($filename, 'r') or die("не удалось открыть файл");
    $i = 0;
    $str = '';
    $text = [];
    $txt = '';
    while (!feof($fd)) {
        $str = htmlentities(fgets($fd));
        if ($i >= $first && $i <= $second) {
            array_push($text, $str);
            $txt .= $str;
            $txt .= "<br>";
        }
        $i++;
    }
    fclose($fd);

    echo '<div class="text_div" style="width: 1000px;"><h1 class="instr" >Ответственность : '.$pos.'</h1></div>';
    foreach ($text as $el) {
        echo '<p class="elOfText" style="width: 1000px;">'.$el.'</p>';

    }
    echo'</div>';
?>
</div>
</div>
</body>
<script src="js/jQuery.js"></script>
<script src="js/main.js"></script>
</html>