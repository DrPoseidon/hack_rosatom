<?php
$connection = new PDO('mysql:host=localhost;dbname=rosatom1', 'root', '');
if (!$connection) {
    die('Error connect to db!');
}