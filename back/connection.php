<?php
$connection = new PDO('mysql:host=localhost;dbname=rosatom_db', 'root', '');
if (!$connection) {
    die('Error connect to db!');
}