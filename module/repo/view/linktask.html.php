<?php
/**
 * The link task view of repo module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2022 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yuchun Li <liyuchun@easycorp.ltd>
 * @package     repo
 * @version     $Id: linktask.html.php$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/sortable.html.php';?>
<?php include '../../common/view/tablesorter.html.php';?>
<style>
#queryBox {padding-top: 25px;}
</style>
<div id='queryBox' data-module='task' class='show no-margin'></div>
<div id='unlinkTaskList'>
  <form class='main-table table-task' data-ride='table' method='post' id='unlinkedTasksForm' target='hiddenwin' action='<?php echo $this->createLink('repo', 'linkTask', "repoID=$repoID&revision=$revision&browseType=$browseType&param=$param&orderBy=$orderBy")?>'>
    <div class='table-header hl-primary text-primary strong'>
      <?php echo html::icon('unlink');?> <?php echo $lang->repo->unlinkedTasks;?>
    </div>
    <table class='table tablesorter'>
      <thead>
        <tr class='text-center'>
          <th class='c-id text-left'>
            <?php if($allTasks):?>
            <div class="checkbox-primary check-all tablesorter-noSort" title="<?php echo $lang->selectAll?>">
              <label></label>
            </div>
            <?php endif;?>
            <?php echo $lang->idAB;?>
          </th>
          <th class='c-pri' title=<?php echo $lang->pri;?>><?php echo $lang->priAB;?></th>
          <th class='text-left'><?php echo $lang->task->name;?></th>
          <th class='c-user'><?php echo $lang->task->finishedByAB;?></th>
          <th class='c-user'><?php echo $lang->task->assignedToAB;?></th>
          <th class='c-status'><?php echo $lang->task->status;?></th>
        </tr>
      </thead>
      <tbody class='text-center'>
        <?php $unlinkedCount = 0;?>
        <?php foreach($allTasks as $task):?>
        <tr>
          <td class='c-id text-left'>
            <?php echo html::checkbox('tasks', array($task->id => sprintf('%03d', $task->id)));?>
          </td>
          <td><span class='label-pri label-pri-<?php echo $task->pri;?>' title='<?php echo zget($lang->task->priList, $task->pri, $task->pri)?>'><?php echo zget($lang->task->priList, $task->pri, $task->pri)?></span></td>
          <td class='text-left nobr' title='<?php echo $task->name?>'><?php echo html::a($this->createLink('task', 'view', "taskID=$task->id", '', true), $task->name, '', "data-toggle='modal' data-type='iframe' data-width='90%'");?></td>
          <td><?php echo zget($users, $task->finishedBy);?></td>
          <td><?php echo zget($users, $task->assignedTo);?></td>
          <td>
            <span class='status-task status-<?php echo $task->status?>'>
              <?php echo $this->processStatus('task', $task);?>
            </span>
          </td>
        </tr>
        <?php $unlinkedCount++;?>
        <?php endforeach;?>
      </tbody>
    </table>
    <div class='table-footer'>
      <?php if($unlinkedCount):?>
      <div class="checkbox-primary check-all"><label><?php echo $lang->selectAll?></label></div>
      <div class="table-actions btn-toolbar">
        <?php echo html::submitButton($lang->repo->linkTask, '', 'btn');?>
      </div>
      <?php endif;?>
      <div class='table-statistic'></div>
      <?php $pager->show('right', 'pagerjs');?>
    </div>
  </form>
</div>
<script>
$(function()
{
    $('#unlinkTaskList .tablesorter').sortTable();
    setForm();
});
</script>
