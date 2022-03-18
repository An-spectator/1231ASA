#!/usr/bin/env php
<?php
include dirname(dirname(dirname(__FILE__))) . '/lib/init.php';
include dirname(dirname(dirname(__FILE__))) . '/class/user.class.php';
su('admin');

/**

title=测试 userModel->getProductViewListUsers();
cid=1
pid=1

*/

$user = new userTest();
$stakeholders['test9']  = 'test9';
$stakeholders['test10'] = 'test10';

$teams['pm7'] = 'pm7';
$teams['pm8'] = 'pm8';

$whiteList['user35'] = 'user35';
$whiteList['user35'] = 'user35';
$whiteList['astaw']  = 'astaw';

r(count($user->getProductViewListUsersTest(1, $stakeholders, $teams, $whiteList))) && p()        && e('11');    //获取对ID为1的产品有权限的用户
r($user->getProductViewListUsersTest(1, $stakeholders, $teams, $whiteList))        && p('test9') && e('test9'); //获取对ID为1的产品有权限的用户
r($user->getProductViewListUsersTest(1, $stakeholders, $teams, $whiteList))        && p('admin') && e('admin'); //获取对ID为1的产品有权限的用户
r($user->getProductViewListUsersTest(2, $stakeholders, $teams, $whiteList))        && p('astaw') && e('astaw'); //获取对ID为2的产品有权限的用户
