<?php
/**
 * The to20 view file of upgrade module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     upgrade
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.lite.html.php';?>
<div class='container'>
  <div class='panel' style='padding:50px 280px'>
    <form method='post'>
      <h1 class='text-center'><?php echo $title;?></h1>
      <div class='main-row' id='mainContent'>
        <div class='main-col main-table'>
          <table class="table datatable">
            <thead>
              <tr>
                  <th colspan='2'><?php echo $this->lang->upgrade->mode;?></th>
                  <th colspan='2' class="text-center"><?php echo $this->lang->upgrade->to18Mode['lean'];?></th>
                  <th colspan='2' class="text-center"><?php echo $this->lang->upgrade->to18Mode['new'];?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->mode;?></td>
                <td colspan='2'><?php echo $this->lang->upgrade->leanUsage;?></td>
                <td colspan='2'><?php echo $this->lang->upgrade->newUsage;?></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->program;?></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-close"></i></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->productRR;?></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->productUR;?></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-close"></i></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->productLine;?></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-close"></i></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->projectScrum;?></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-close"></i></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->projectWaterfull;?></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-close"></i></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->projectKanban;?></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->execution;?></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->assetlib;?></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-close"></i></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->oa;?></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
                <td colspan='2' class="text-center"><i class="icon icon-2x icon-check"></i></td>
              </tr>
              <tr>
                <td colspan='2' style="font-weight:bold;"><?php echo $this->lang->upgrade->selectUsage;?></td>
                <td colspan='2' class="text-center"><button class="btn" type="button" id='useLean'><?php echo $this->lang->upgrade->useLean;?></button></td>
                <td colspan='2' class="text-center"><button class="btn" type="button" id='useNew'><?php echo $this->lang->upgrade->useNew;?></button></td>
              </tr>
              <tr>
                <td colspan='2'><?php echo $this->lang->upgrade->remark;?></td>
                <td colspan='4' class="text-center"><?php echo $this->lang->upgrade->remarkDesc;?></td>
              </tr>
            </tbody>
            <?php echo html::hidden('mode','')?>
          </table>
        </div>
      </div>
    </form>
  </div>
</div>
<?php include '../../common/view/footer.lite.html.php';?>
