<?php
require_once 'back/connection.php';

switch($_GET['table']) {
    case 'enterprises':
        $sql = "SELECT * FROM enterprises WHERE id_sub = ?";
        $stm = $connection->prepare($sql);
        $stm->execute([$_GET['id']]);
        $results = $stm->fetch(PDO::FETCH_ASSOC);

//        var_dump($results['subdivision']);
//        die();
        break;
    case 'info':
        $sql = "SELECT * FROM info WHERE id_info = ?";
        $stm = $connection->prepare($sql);
        $stm->execute([$_GET['id']]);
        $results = $stm->fetch(PDO::FETCH_ASSOC);
        break;
    case 'users':
        $sql = "SELECT * FROM users WHERE id_user = ?";
        $stm = $connection->prepare($sql);
        $stm->execute([$_GET['id']]);
        $results = $stm->fetch(PDO::FETCH_ASSOC);
        break;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post" class="editForm">
        <?php switch ($_GET['table']):
        case "enterprises": ?>
            <label for="">Subdivision</label>
            <input type="text" value="<?=$results['subdivision']?>" name="subdivision">

            <input type="hidden" value="enterprises" name="table">
            <input type="hidden" value="<?=$_GET['id']?>" name="id">
        <?php break;?>
        <?php case "info": ?>
            <label for="">id_sub</label>
            <input type="number" value="<?=$results['id_sub']?>" name="id_sub">

            <label for="">id_user</label>
            <input type="number" value="<?=$results['id_user']?>" name="id_user">

            <label for="">id_inst</label>
            <input type="number" value="<?=$results['id_inst']?>" name="id_inst">

            <label for="">Surname</label>
            <input type="text" value="<?=$results['surname']?>" name="surname">

            <label for="">Name</label>
            <input type="text" value="<?=$results['name']?>" name="name">

            <label for="">Mid_name</label>
            <input type="text" value="<?=$results['mid_name']?>" name="mid_name">

            <label for="">Position</label>
            <input type="text" value="<?=$results['position']?>" name="position">

            <label for="">Phone</label>
            <input type="text" value="<?=$results['phone']?>" name="phone">

            <input type="hidden" value="info" name="table">
            <input type="hidden" value="<?=$_GET['id']?>" name="id">
        <?php break;?>
        <?php case "users": ?>
            <label for="">Email</label>
            <input type="email" value="<?=$results['email']?>" name="email">

            <label for="">Password</label>
            <input type="text" value="<?=$results['pass']?>" name="pass">

            <label for="">P_number</label>
            <input type="text" value="<?=$results['p_number']?>" name="p_number">

            <label for="">Access</label>
            <input type="number" value="<?=$results['access']?>" name="access">

            <input type="hidden" value="users" name="table">
            <input type="hidden" value="<?=$_GET['id']?>" name="id">
        <?php break;?>
        <?php endswitch;?>
        <button type="submit" class="update editBtn">Изменить</button>
    </form>
</body>
</html>
