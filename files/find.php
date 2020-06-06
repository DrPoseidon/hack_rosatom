<?php
$st_strpos = 'Коммерческий агент';
$array = [[0] => '001.txt',[1] => '002.txt',[2] => '003.txt'];
for($i = 0; $i < count($array); $i++){
$st_search = $array[$i];
echo "Результат поиска в файле $st_search: <br>";
if (strpos(file_get_contents("$st_search"), "$st_strpos")) echo "Есть такое слово ".$array[$i]; else echo "Нет такого слова";
}
?>

