<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/8
 * Time: 22:09
 */
require_once 'config.php';
require_once 'saetv2.ex.class.php';
$o = new SaeTOAuthV2(WE_KEY, WE_SEC);
$oauth = $o->getAuthorizeURL(CALLBACK);
header('Location: '.$oauth);
