<?php
session_start();

require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\AutoLoader::register();
// reference the Dompdf namespace
use Dompdf\Dompdf;


/////////////////////////////




$fullDownload = '';

$filename = $_GET['filename'];
//var_dump($_GET['filename']);
//die();

$fileContents = file($filename);
//$fullDownload .= '<div class="inst_div" style="position: absolute;left: 50%;transform: translate(-50%,0)">';
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

$fullDownload .= '<div class="text_div" style="width: 1000px;"><h1 class="instr" >Общие положения : '.$pos.'</h1></div>';

foreach ($text as $el) {
    $fullDownload .= '<p class="elOfText" style="width: 1000px;">'.$el.'</p>';
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

$fullDownload .= '<div class="text_div" style="width: 1000px;"><h1 class="instr" >Должностные обязанности : '.$pos.'</h1></div>';

foreach ($text as $el) {
    $fullDownload .= '<p class="elOfText" style="width: 1000px;">'.$el.'</p>';
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

$fullDownload .= '<div class="text_div" style="width: 1000px;"><h1 class="instr" >Права : '.$pos.'</h1></div>';
foreach ($text as $el) {
    $fullDownload .= '<p class="elOfText" style="width: 1000px;">'.$el.'</p>';

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

$fullDownload .= '<div class="text_div" style="width: 1000px;"><h1 class="instr" >Ответственность : '.$pos.'</h1></div>';
foreach ($text as $el) {
    $fullDownload .= '<p class="elOfText" style="width: 1000px;">'.$el.'</p>';

}
//$fullDownload .= '</div>';

//var_dump($fullDownload);
//die();

///////////////////////////

// instantiate and use the dompdf class
$dompdf = new Dompdf([
    'defaultFont' => 'DejaVu Serif'
]);
$dompdf->loadHtml("
<style>
.text_div {
    background-color: #0094ff;
    padding: 10px 30px;
    margin-top: 30px;
    margin-bottom: 20px;
    color: #fff;
    border-radius: 3px;
}

.instr {
    font-size: 28px;
    text-align: center;
}

.elOfText {
    background-color: #ffd12a;
    font-size: 18px;
    color: #1B1B1B;
    padding: 10px 30px;
    margin-top: 15px;
    font-weight: bold;
}
</style>
$fullDownload");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();