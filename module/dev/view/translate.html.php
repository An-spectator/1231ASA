<?php
/**
 * The translate view file of dev module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 禅道软件（青岛）有限公司(ZenTao Software (Qingdao) Co., Ltd. www.cnezsoft.com)
 * @license     ZPL(http://zpl.pub/page/zplv12.html) or AGPL(https://www.gnu.org/licenses/agpl-3.0.en.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     dev
 * @version     $Id$
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/header.html.php';?>
<style>
#subNavbar li[data-id='dev'].active > a {font-weight: normal; color: #3c4353;}
</style>
<div id='mainContent' class='main-content'>
  <div class='alert alert-danger'><?php echo $lang->dev->noteTranslate;?></div>
</div>
<?php include '../../common/view/footer.html.php';?>
