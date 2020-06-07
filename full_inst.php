<?php
session_start();
require_once('back/connection.php');
$query = 'select p_number from users where email = ?';
$stmt = $connection->prepare($query);
$stmt->execute([$_SESSION['user']['email']]);
$res = $stmt->fetch();
$p_number =  $res['p_number'];

$query = 'select id_inst,position from info where p_number = ?';
$stmt = $connection->prepare($query);
$stmt->execute([$p_number]);
$res = $stmt->fetch();
$id_inst =  $res['id_inst'];
$pos = $res['position'];

$query = 'select path from instructions where id_inst = ?';
$stmt = $connection->prepare($query);
$stmt->execute([$id_inst]);
$res = $stmt->fetch();
$full_path=  $res['path'];
$p = explode('||',$full_path);
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
<a class="backToProfile" href="profile.php">Вернуться назад</a>
<?php
foreach ($p as $pa){
    echo '<a class="downloadFullPdf" href="downloadFull.php?filename='.$_SERVER['DOCUMENT_ROOT'].'/files/files1/'.substr($pa, -7).'">Скачать в PDF</a>';
}
?>
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
