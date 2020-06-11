<?php
require_once "back/connection.php";

$sqlEnterprises = "SELECT * FROM enterprises";
$sqlInfo = "SELECT * FROM info";
$sqlInstructions = "SELECT * FROM instructions";
$sqlUsers = "SELECT * FROM users";

$resultsEnterprises = $connection->query($sqlEnterprises)->fetchAll(PDO::FETCH_ASSOC);
$resultsInfo = $connection->query($sqlInfo)->fetchAll(PDO::FETCH_ASSOC);
$resultsInstructions = $connection->query($sqlInstructions)->fetchAll(PDO::FETCH_ASSOC);
$resultsUsers = $connection->query($sqlUsers)->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="wrapper">
        <div class="leftPanel">
            <div class="enterprisesText">enterprises</div>
            <div class="infoText">info</div>
            <div class="instructionsText">instructions</div>
            <div class="usersText">users</div>
        </div>

        <div class="rightPanel">
            <table class="enterprises">
                <tr class="title">
<!--                    <th>id_sub</th>-->
                    <th>Subdivision</th>
                </tr>
                <tr>
                    <form action="create.php" method="post">
                    <td >
                            <input type="text" class="createInput" name="text">
                    </td>
                    <td colspan="2">
                        <button type="submit" class="addNew">Добавить новую запись</button>
                    </td>
                    </form>
                </tr>
                <?php foreach($resultsEnterprises as $el):?>
                    <tr>
<!--                        <td>--><?//=$el['id_sub']?><!--</td>-->
                        <td><?=$el['subdivision']?></td>
                        <td><a href="delete.php?id=<?=$el['id_sub']?>&table=enterprises" class="delete">Удалить</a></td>
                        <td><a href="updatePageUsers.php?id=<?=$el['id_sub']?>&table=enterprises" class="updateEnterprises update">Редактировать</a></td>
                    </tr>
                <?php endforeach;?>
            </table>

            <table class="info">
                <tr class="title">
<!--                    <th>id_info</th>-->
                    <th>id_sub</th>
                    <th>id_user</th>
                    <th>id_inst</th>
                    <th>Surname</th>
                    <th>Name</th>
                    <th>Mid_name</th>
                    <th>Position</th>
                    <th>Phone</th>
                </tr>
                <?php foreach($resultsInfo as $el):?>
                    <tr>
<!--                        <td>--><?//=$el['id_info']?><!--</td>-->
                        <td><?=$el['id_sub']?></td>
                        <td><?=$el['id_user']?></td>
                        <td><?=$el['id_inst']?></td>
                        <td><?=$el['surname']?></td>
                        <td><?=$el['name']?></td>
                        <td><?=$el['mid_name']?></td>
                        <td><?=$el['position']?></td>
                        <td><?=$el['phone']?></td>
                        <td><a href="delete.php?id=<?=$el['id_info']?>&table=info" class="delete">Удалить</a></td>
                        <td><a href="updatePageUsers.php?id=<?=$el['id_info']?>&table=info" class="updateInfo update">Редактировать</a></td>
                    </tr>
                <?php endforeach;?>
            </table>

            <table class="instructions">
                <tr class="title">
<!--                    <th>id_inst</th>-->
                    <th>Path</th>
                </tr>
                <?php foreach($resultsInstructions as $el):?>
                    <tr>
<!--                        <td>--><?//=$el['id_inst']?><!--</td>-->
                        <td><?=$el['path']?></td>
                    </tr>
                <?php endforeach;?>
            </table>

            <table class="users">
                <tr class="title">
<!--                    <th>id_user</th>-->
                    <th>Email</th>
                    <th>P_number</th>
                    <th>Access</th>
                </tr>
                <?php foreach($resultsUsers as $el):?>
                    <tr>
<!--                        <td>--><?//=$el['id_user']?><!--</td>-->
                        <td class="userEmail"><?=$el['email']?></td>
                        <td class="userPNumber"><?=$el['p_number']?></td>
                        <td class="userAccess"><?=$el['access']?></td>
                        <td><a href="delete.php?id=<?=$el['id_user']?>&table=users" class="delete">Удалить</a></td>
                        <td><a href="updatePageUsers.php?id=<?=$el['id_user']?>&table=users" class="updateUsers update">Редактировать</a></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
<!--    <div class="deleteElement">-->
<!---->
<!--        <div class="closeTheWindow"></div>-->
<!--    </div>-->
    <div class="fon"></div>
    <script src="admin.js"></script>
</body>
</html>
