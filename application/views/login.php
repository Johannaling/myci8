<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <base href="<?php echo site_url() ?>">

</head>
<body>
<form action="welcome/check_login" method="post">
    <p>
        用户名：<input type="text" name="username">
    </p>
    <p>
        密码：<input type="password" name="pwd">
    </p>
    <p>
        <input type="submit" value="确定">
    </p>
</form>

</body>
</html>