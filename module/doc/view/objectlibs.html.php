<?php
/**
 * The objectLibs view file of doc module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 禅道软件（青岛）有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     doc
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php if($app->tab == 'execution'):;?>
<style>.panel-body{min-height: 180px}</style>
<?php endif;?>
<div class="cell<?php if($type == 'bySearch') echo ' show';?>" id="queryBox" data-module=<?php echo $type . 'Doc';?>></div>
<div class="fade main-row split-row" id="mainRow">
  <?php if($libID):?>
    <?php include './side.html.php';?>
    <div class="main-col" data-min-width="400">
      <?php if($docID):?>
        <?php include './content.html.php';?>
      <?php else:?>
      <div class="cell">
        <div class="detail empty text-center">
        <?php echo $type == 'book' ? $lang->doc->noArticle : $lang->doc->noDoc;?>
        </div>
      </div>
      <?php endif;?>
    </div>
  <?php else:?>
    <div class="cell">
      <div class="detail empty text-center">
        <?php echo $type == 'book' ? $lang->doc->noBook : $lang->doc->noLib;?>
        <?php if($type != 'book') echo html::a($this->createLink('doc', 'createLib', "type={$objectType}&objectID=$object->id"), "<i class='icon icon-plus'></i> " . $lang->doc->createLib, '', "class='btn btn-info iframe'");?>
      </div>
    </div>
  <?php endif;?>
</div>
<?php js::set('type', 'doc');?>
<script>
$('#pageNav .btn-group.angle-btn').click(function()
{
    if($(this).hasClass('opened')) return;
    $(this).addClass('opened');

    scrollToSelected();
})
</script>
<?php include '../../common/view/footer.html.php';?>
