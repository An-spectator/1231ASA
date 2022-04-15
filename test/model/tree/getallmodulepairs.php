#!/usr/bin/env php
<?php
include dirname(dirname(dirname(__FILE__))) . '/lib/init.php';
include dirname(dirname(dirname(__FILE__))) . '/class/tree.class.php';
su('admin');

/**

title=测试 treeModel->getAllModulePairs();
cid=1
pid=1

*/
$type = array('bug', 'case', 'task');

$tree = new treeTest();

r($tree->getAllModulePairsTest())         && p() && e('3601'); // 测试获取默认(task)的模块信息
r($tree->getAllModulePairsTest($type[0])) && p() && e('1201'); // 测试获取默认(task)的模块信息
r($tree->getAllModulePairsTest($type[1])) && p() && e('1201'); // 测试获取默认(task)的模块信息
r($tree->getAllModulePairsTest($type[2])) && p() && e('3601'); // 测试获取默认(task)的模块信息
