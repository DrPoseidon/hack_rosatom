<?php
require_once 'back/connection.php';

$stm = $connection->prepare("INSERT INTO enterprises(subdivision) VALUES(?)");
$stm->execute([$_POST['text']]);

header('Location: admin.php');
die();