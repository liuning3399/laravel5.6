<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/8
 * Time: 22:04
 */
require_once 'config.php';
require_once 'saetv2.ex.class.php';
$isLogin = isset($_COOKIE['accesstoken']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>微博测试</title>
</head>
<body>
<?php if (!$isLogin) { ?>
    <a href="wblogin.php"><img src="weibo_login.png" /></a>
<?php } else { ?>
    您已成功登陆微博账号；
    <a href="exit.php">退出登陆</a>
    <hr>

<?php

$o = new SaeTClientV2(WE_KEY, WE_SEC, $_COOKIE['accesstoken']);
$o->update('这是一个测试的微博');
} ?>
</body>
</html>


