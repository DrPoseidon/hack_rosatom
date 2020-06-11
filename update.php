<?php
require_once 'back/connection.php';

switch($_POST['table']) {
    case 'enterprises':
        $sql = "UPDATE enterprises SET subdivision = :subdivision WHERE id_sub = :id";
        $stm = $connection->prepare($sql);
        $stm->bindValue(':subdivision', $_POST['subdivision']);
        $stm->bindValue(':id', $_POST['id']);
        $stm->execute();
        break;
    case 'info':
        $sql = "UPDATE info SET id_sub = :id_sub, id_user = :id_user, id_inst = :id_inst, surname = :surname, name = :name, mid_name = :mid_name, position = :position, phone = :phone WHERE id_info = :id";
        $stm = $connection->prepare($sql);
        $stm->bindValue(':id_sub', $_POST['id_sub']);
        $stm->bindValue(':id_user', $_POST['id_user']);
        $stm->bindValue(':id_inst', $_POST['id_inst']);
        $stm->bindValue(':surname', $_POST['surname']);
        $stm->bindValue(':name', $_POST['name']);
        $stm->bindValue(':mid_name', $_POST['mid_name']);
        $stm->bindValue(':position', $_POST['position']);
        $stm->bindValue(':phone', $_POST['phone']);
        $stm->bindValue(':id', $_POST['id']);
        $stm->execute();
        break;
    case 'users':
        $sql = "UPDATE users SET email = :email, pass = :pass, p_number = :p_number, access = :access WHERE id_user = :id";
        $stm = $connection->prepare($sql);
        $stm->bindValue(':email', $_POST['email']);
        $stm->bindValue(':pass', $_POST['pass']);
        $stm->bindValue(':p_number', $_POST['p_number']);
        $stm->bindValue(':access', $_POST['access']);
        $stm->bindValue(':id', $_POST['id']);
        $stm->execute();
        break;
}

header('Location: admin.php');
die();