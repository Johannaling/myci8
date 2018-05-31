<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="<?php echo site_url() ?>">
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid #000;
        }

        td, th {
            border: 1px solid #000;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>用户名</th>
        <th>真实姓名</th>
        <th>电话</th>
        <th>操作</th>
    </tr>
    <?php
        foreach ($users as $user) {

            ?>
            <tr>
                <td><?php echo $user -> user_id?></td>
                <td><?php echo $user -> username?></td>
                <td><?php echo $user -> realname?></td>
                <td><?php echo $user -> tel?></td>
                <td>
<!--                    <a href="#">修改</a> | <a class="del" href="welcome/delete_user?user_id=--><?php //echo $user -> user_id?><!--">删除</a>-->
                    <a href="#">修改</a> | <a class="del" href="welcome/delete_user/<?php echo $user -> user_id?>">删除</a>
                </td>
            </tr>
            <?php
        }
    ?>
</table>
<script src="js/jquery-1.9.1.min.js"></script>
<script>
    $(function () {
        $('.del').on('click', function () {
            if (confirm('确定删除吗?')) {
                return true;
            }
            return false;
        });
    });
</script>
</body>
</html>