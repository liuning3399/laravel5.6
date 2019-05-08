<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/8
 * Time: 22:57
 */
require_once 'config.php';
require_once 'saetv2.ex.class.php';

$code = $_GET['code'];
$keys['code'] = $code;
$keys['redirect_uri'] = CALLBACK;
$o = new SaeTOAuthV2(WE_KEY, WE_SEC);
$auth = $o->getAccessToken($keys);

setcookie('accesstoken', $auth['access_token'], time()+86400);
header('Location: index.php');