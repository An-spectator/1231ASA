<?php
/**
 * The create view of doc module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Jia Fu <fujia@cnezsoft.com>
 * @package     doc
 * @version     $Id: create.html.php 975 2010-07-29 03:30:25Z jajacn@126.com $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php if($doc->contentType == 'html')     include '../../common/view/kindeditor.html.php';?>
<?php if($doc->contentType == 'markdown') include '../../common/view/markdown.html.php';?>
<?php js::set('needUpdateContent', $doc->content != $doc->draft);?>
<?php js::set('confirmUpdateContent', $lang->doc->confirmUpdateContent);?>
<?php js::set('docID', $doc->id);?>
<?php js::set('draft', $doc->draft);?>
<?php js::set('holders', $lang->doc->placeholder);?>
<?php js::set('type', 'doc');?>
<style>
#main {padding: 0;}
.container {padding: 0 !important;}
#mainContent {padding: 0 !important;}
#dataform {overflow: hidden}
.doc-title input {border: unset; font-size: 18px; font-weight: bold; color: #3c4353; padding-left: 16px;}
.doc-title .form-control:focus {border: unset; box-shadow: unset;}
.doc-title input::-webkit-input-placeholder {color: #D8DBDE;}
.doc-title.required:after {top: 4px; right: 0; left: 12px; display: inline-table;}
#submit {margin-right: 12px;}
#headerBox {border-bottom: 1px solid #e3e3e3;}
#editorContent {padding: 0;}

#contentBox {padding: 0; width: 100%;}
.ke-container {overflow: visible;}
.ke-container, .contenthtml {border: unset; background: #efefef;}
.ke-container.focus {box-shadow: unset; border-color: unset;}
.ke-toolbar {padding-left: 20px; width: 150%; height: 30px; border-bottom: unset;}
.ke-edit {border-top: 1px solid rgb(220, 220, 220)}
.ke-edit, .CodeMirror {margin-left: 20px; background: #fff;}
.kindeditor-ph {padding-left: 20px !important;}
.editor-toolbar {background: #fff; padding-left: 20px; border-right: unset; border-top: unset; height: 30px;}
.hide-sidebar .ke-edit {padding-right: 20px;}
.hide-sidebar .CodeMirror {padding-right: 50px;}
.CodeMirror.CodeMirror-wrap {border-left: 0; border-right: 0; border-bottom: 0;}
.ke-statusbar {display: none;}

#sidebar {top: 30px;}
#sidebar .sidebar-toggle {right: 0; left: 0px; background: #efefef; border-radius: 0px; width: 20px; border-top: 1px solid rgb(220, 220, 220);}
#sidebar > .sidebar-toggle:hover {background: #efefef;}
#sidebar {width: 500px;}
#sidebar table {margin-top: 5px;}
#sidebar table th {font-weight: 400 !important;}
.hide-sidebar #sidebar > .sidebar-toggle > .icon:before {content: "\e314";}
.hide-sidebar #sidebar > .sidebar-toggle {left: -20px; z-index: 9;}
#sidebar .cell {border-top: 1px solid rgb(220, 220, 220); border-radius: 0px; height: 100%;}
#sidebar > .sidebar-toggle > .icon.icon-angle-right {left: 4px;}
.file-title {max-width: 130px !important;}

.th-control {vertical-align: top !important;}

#noticeAcl {margin: 0;}
</style>
<div id="mainContent" class="main-content">
  <form class="load-indicator main-form form-ajax" id="dataform" method='post' enctype='multipart/form-data'>
    <table class='table table-form'>
      <tbody>
        <tr id='headerBox'>
          <td class="doc-title" colspan='4'><?php echo html::input('title', $doc->title, "placeholder='{$lang->doc->titlePlaceholder}' class='form-control' required");?></td>
          <td class="text-right"><?php echo html::submitButton('', '', 'btn btn-primary') . html::backButton('', '', 'btn');?></td>
        </tr>
        <tr>
          <td colspan='5' id="editorContent">
            <div class="main-row fade in">
              <div id='contentBox' class="main-col">
                <div class='contenthtml'><?php echo html::textarea('content', htmlSpecialString($doc->content), "style='width:100%;'");?></div>
                <?php echo html::hidden('contentType', $doc->contentType);?>
                <?php echo html::hidden('type', 'text');?>
                <?php echo html::hidden('editedDate', $doc->editedDate);?>
              </div>
              <div class="basicInfoBox side-col" id="sidebar">
                <div class="sidebar-toggle"><i class="icon icon-angle-right"></i></div>
                <div class="cell" style="width: 100%">
                  <div class="detail">
                    <div class='detail-title'><?php echo $lang->story->legendBasicInfo;?></div>
                    <table class='table table-form'>
                      <tr>
                        <th class='w-100px'><?php echo $lang->doc->lib;?></th>
                        <td colspan="2" class="required"><?php echo html::select('lib', $libs, $doc->lib, "class='form-control chosen' onchange=loadDocModule(this.value)");?></td>
                      </tr>
                      <tr>
                        <th><?php echo $lang->doc->module;?></th>
                        <td colspan="2">
                          <span id='moduleBox'><?php echo html::select('module', $moduleOptionMenu, $doc->module, "class='form-control chosen'");?></span>
                        </td>
                      </tr>
                      <tr>
                        <th><?php echo $lang->doc->keywords;?></th>
                        <td colspan='2'><?php echo html::input('keywords', $doc->keywords, "class='form-control' placeholder='{$lang->doc->keywordsTips}'");?></td>
                      </tr>
                      <tr id='fileBox'>
                        <th><?php echo $lang->doc->files;?></th>
                        <td colspan='2'><?php echo $this->fetch('file', 'buildform');?></td>
                      </tr>
                      <tr>
                        <th><?php echo $lang->doc->mailto;?></th>
                        <td colspan="2">
                          <div class="input-group">
                            <?php
                            echo html::select('mailto[]', $users, $doc->mailto, "multiple class='form-control picker-select' data-drop-direction='top'");
                            echo $this->fetch('my', 'buildContactLists');
                            ?>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th class="th-control"><?php echo $lang->doclib->control;?></th>
                        <td colspan='2'>
                          <?php $acl = $lib->acl == 'private' ? 'private' : $doc->acl;?>
                          <?php echo html::radio('acl', $lang->doc->aclList, $acl, "onchange='toggleAcl(this.value, \"doc\")'")?>
                          <p class='text-info' id='noticeAcl'><?php echo $lang->doc->noticeAcl['doc'][$acl];?></p>
                        </td>
                      </tr>
                      <tr id='whiteListBox' class='hidden'>
                        <th><?php echo $lang->doc->whiteList;?></th>
                        <td colspan='2'>
                          <div class='input-group w-p100'>
                            <span class='input-group-addon groups-addon'><?php echo $lang->doclib->group?></span>
                            <?php echo html::select('groups[]', $groups, $doc->groups, "class='form-control picker-select' multiple data-drop-direction='top'")?>
                          </div>
                          <div class='input-group w-p100'>
                            <span class='input-group-addon'><?php echo $lang->doclib->user?></span>
                            <?php echo html::select('users[]', $users, $doc->users, "class='form-control picker-select' multiple data-drop-direction='top'")?>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
<script>
$(function()
{
    $('.doc-title input').focus();

    $('#dataform').submit(function()
    {
        setTimeout(function(){$('#dataform').scrollTop(0)}, 100);
    });

    var contentHeight = $(document).height() - 120;
    $('#sidebar').height(contentHeight);
    setTimeout(function(){$('.ke-edit-iframe, .ke-edit').height(contentHeight);}, 100);
    setTimeout(function(){$('.CodeMirror').height(contentHeight);}, 100);

    $('#editorContent .icon.icon-angle-right').css('top', '50%');
})
</script>
<?php js::set('noticeAcl', $lang->doc->noticeAcl['doc']);?>
<?php include '../../common/view/footer.html.php';?>