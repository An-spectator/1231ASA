<?php
/**
 * The config file of block module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 禅道软件（青岛）有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.zentao.net
 */
$config->block = new stdclass();
$config->block->version = 2;
$config->block->editor  = new stdclass();
$config->block->editor->set = array('id' => 'html', 'tools' => 'simple');

$config->block->moduleIndex = array();
$config->block->moduleIndex['program'] = 'project';
$config->block->moduleIndex['project'] = 'execution';

$config->block->longBlock = array();
$config->block->longBlock['']['guide']                  = 'guide';
$config->block->longBlock['']['welcome']                = 'welcome';
$config->block->longBlock['']['assigntome']             = 'assigntome';
$config->block->longBlock['product']['statistic']       = 'statistic';
$config->block->longBlock['execution']['statistic']     = 'statistic';
$config->block->longBlock['qa']['statistic']            = 'statistic';
$config->block->longBlock['project']['waterfallreport'] = 'waterfallreport';
$config->block->longBlock['project']['waterfallissue']  = 'waterfallissue';
$config->block->longBlock['project']['waterfallrisk']   = 'waterfallrisk';

$config->block->shortBlock = array();
$config->block->shortBlock['product']['overview']          = 'overview';
$config->block->shortBlock['project']['overview']          = 'overview';
$config->block->shortBlock['project']['waterfallestimate'] = 'waterfallestimate';
$config->block->shortBlock['project']['waterfallprogress'] = 'waterfallprogress';
$config->block->shortBlock['']['contribute'] = 'contribute';

$config->statistic = new stdclass();
$config->statistic->storyStages = array('wait', 'planned', 'developing', 'testing', 'released');

$config->block->workMethods = 'task,story,requirement,bug,testcase,testtask,issue,risk,meeting';
