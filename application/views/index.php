<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="<?php echo site_url() ?>">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    欢迎：<?php echo $this->session->userdata('login_name') ?>

    <p>
        <a href="welcome/list_user">所有用户</a>
    </p>
</body>
</html>