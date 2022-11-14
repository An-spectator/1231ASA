<?php
/**
 * The create view file of zahost module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Jianhua Wang<wangjianhua@easycorp.ltd>
 * @package     zahost
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include $app->getModuleRoot() . 'common/view/header.html.php';?>
<?php include $app->getModuleRoot() . 'common/view/kindeditor.html.php';?>
<div id='mainContent' class='main-row'>
  <div class='main-col main-content'>
    <div class='center-block'>
      <div class='main-header'>
        <h2><?php echo $lang->zahost->editAction;?></h2>
      </div>
      <form method='post' target='hiddenwin' id='ajaxForm' class="load-indicator main-form form-ajax">
        <table class='table table-form'>
          <tr>
            <th><?php echo $lang->zahost->virtualSoftware;?></th>
            <td><?php echo html::select('virtualSoftware', $lang->zahost->softwareList, $host->virtualSoftware, "class='form-control chosen'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->zahost->zaHostType;?></th>
            <td><?php echo html::select('hostType', $lang->zahost->zaHostTypeList, $host->hostType, "class='form-control chosen'");?></td>
            <td></td>
          </tr>
          <tr>
            <th><?php echo $lang->zahost->name;?></th>
            <td><?php echo html::input('name', $host->name, "class='form-control'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->zahost->IP;?></th>
            <td><?php echo html::input('address', $host->address, "class='form-control' disabled");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->zahost->cpu         ;?></th>
            <td><?php echo html::select('cpu', $config->zahost->cpuCoreList, $host->cpu, "class='form-control chosen'");?></td>
          </tr>
          <tr>
            <th><?php echo $lang->zahost->memory;?></th>
            <td>
              <div class='input-group'>
                <?php echo html::input('memory', $host->memory, "class='form-control'");?>
                <span class="input-group-addon" id="memory-addon"><?php echo $lang->zahost->unitList['GB'];?></span>
              </div>
            </td>
          </tr>
          <tr>
            <th><?php echo $lang->zahost->disk;?></th>
            <td>
              <div class='input-group'>
                <?php echo html::input('disk', $host->disk, "class='form-control'");?>
                <span class='input-group-addon fix-border fix-padding' id='unit'>
                  <?php echo $lang->zahost->unitList['GB'];?>
                </span>
              </div>
            </td>
          </tr>
          <tr>
            <th><?php echo $lang->zahost->desc ?></th>
            <td colspan='2'><?php echo html::textarea('desc', $host->desc, "class='form-control'")?></td>
            <td></td>
          </tr>
          <tr>
            <td colspan='2' class='text-center form-actions'>
              <?php echo html::submitButton();?>
              <?php echo html::backButton();?>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>
<?php include $app->getModuleRoot() . 'common/view/footer.html.php';?>
