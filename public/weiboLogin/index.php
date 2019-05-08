<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/8
 * Time: 22:04
 */

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
<?php } ?>
</body>
</html>


