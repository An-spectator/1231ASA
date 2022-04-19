#!/usr/bin/env php
<?php
include dirname(dirname(dirname(__FILE__))) . '/lib/init.php';
include dirname(dirname(dirname(__FILE__))) . '/class/tree.class.php';
su('admin');

/**

title=测试 treeModel->updateOrder();
cid=1
pid=1

测试更新模块顺序 1 >> ,2221,2821,1822,2822,1823,2222,2223,1824,2224
测试更新模块顺序 2 >> ,2221,2821,1822,2822,1823,1824,2222,2223,2224
测试更新模块顺序 3 >> ,2221,2822,1822,2821,1823,1824,2222,2223,2224
测试更新模块顺序 4 >> ,1984,2901,2381,2902,2382,2383,2384

*/
$orders1 = array('2221' => 0, '2821' => 1, '2822' => 2, '1822' => 3, '1823' => 4, '2222' => 5, '2223' => 6, '1824' => 7, '2224' => 8);
$orders2 = array('2221' => 0, '2821' => 1, '2822' => 2, '1822' => 3, '1823' => 4, '1824' => 5, '2222' => 6, '2223' => 7, '2224' => 8);
$orders3 = array('2221' => 0, '2822' => 1, '2821' => 2, '1822' => 3, '1823' => 4, '1824' => 5, '2222' => 6, '2223' => 7, '2224' => 8);
$orders4 = array('1984' => 0, '2381' => 1, '2901' => 2, '2902' => 3, '2382' => 4, '2383' => 5, '2384' => 6);

$tree = new treeTest();

r($tree->updateOrderTest($orders1)) && p() && e(',2221,2821,1822,2822,1823,2222,2223,1824,2224'); // 测试更新模块顺序 1
r($tree->updateOrderTest($orders2)) && p() && e(',2221,2821,1822,2822,1823,1824,2222,2223,2224'); // 测试更新模块顺序 2
r($tree->updateOrderTest($orders3)) && p() && e(',2221,2822,1822,2821,1823,1824,2222,2223,2224'); // 测试更新模块顺序 3
r($tree->updateOrderTest($orders4)) && p() && e(',1984,2901,2381,2902,2382,2383,2384'); // 测试更新模块顺序 4
system("./ztest init");