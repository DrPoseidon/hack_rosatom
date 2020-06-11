<?php
require_once 'back/connection.php';

switch($_GET['table']) {
    case 'enterprises':
        $sql = "DELETE FROM enterprises WHERE id_sub = ?";
        $stm = $connection->prepare($sql);
        $stm->execute([$_GET['id']]);
        break;
    case 'info':
        $sql = "DELETE FROM info WHERE id_info = ?";
        $stm = $connection->prepare($sql);
        $stm->execute([$_GET['id']]);
        break;
    case 'users':
        $sql = "DELETE FROM users WHERE id_user = ?";
        $stm = $connection->prepare($sql);
        $stm->execute([$_GET['id']]);
        break;
}

header('Location: admin.php');
die();