<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lee's Login</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/supersized.css"/>
</head>
<body>
    <form action="admin/check_login" method="POST" class="login">登陆
        <input type="text" name="username" placeholder="用户名"/>
        <input type="password" name="password" placeholder="密码"/>
        <button>登陆</button>
    </form>
    <script src="assets/js/jquery-1.8.2.min.js"></script>
<!--    <script src="assets/js/scripts.js"></script>-->
    <script src="assets/js/supersized.3.2.7.min.js"></script>
    <script src="assets/js/supersized-init.js"></script>
</body>
</html>