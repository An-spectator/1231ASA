<?php
/**
 * The control file of design currentModule of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     design
 * @version     $Id: control.php 5107 2013-07-12 01:46:12Z chencongzhi520@gmail.com $
 * @link        http://www.zentao.net
 */
class design extends control
{
    /**
     * Browse designs.
     *
     * @param  int    $productID
     * @param  string $type
     * @param  string $orderBy
     * @param  int    $recTotal
     * @param  int    $recPerPage
     * @param  int    $pageID
     * @access public
     * @return void
     */
    public function browse($productID = 0, $type = 'all', $orderBy = 'id_desc', $recTotal = 0, $recPerPage = 20, $pageID = 1)
    {
        $productID = $this->loadModel('product')->saveState($productID, $this->product->getPairs('nocode'));

        $this->design->setProductMenu($productID);
        $product = $this->loadModel('product')->getById($productID);
        $project = $this->loadModel('project')->getById($product->program);

        $this->app->session->set('designList', $this->app->getURI(true));

        $this->app->loadClass('pager', $static = true);
        if($this->app->getViewType() == 'mhtml') $recPerPager = 10;
        $pager    = pager::init($recTotal, $recPerPage, $pageID);

        $designs = $this->design->getList($productID, $type, $orderBy, $pager);

        $this->view->title        = $this->lang->design->browse;
        $this->view->position[]   = $this->lang->design->browse;

        $this->view->designs      = $designs;
        $this->view->type         = $type;
        $this->view->recTotal     = $recTotal;
        $this->view->recPerPage   = $recPerPage;
        $this->view->pageID       = $pageID;
        $this->view->orderBy      = $orderBy;
        $this->view->productID    = $productID;
        $this->view->program      = $project;
        $this->view->pager        = $pager;

        $this->display();
    }

    /**
     * Create a design.
     *
     * @param  int    $productID
     * @param  string $prevModule
     * @param  int    $prevID
     * @access public
     * @return void
     */
    public function create($productID = 0, $prevModule = '', $prevID = 0)
    {
        $productID = $this->loadModel('product')->saveState($productID, $this->product->getPairs('nocode'));

        $this->design->setProductMenu($productID);

        if($_POST)
        {
            $productID = $this->post->product;

            $designID = $this->design->create();
            if(dao::isError())
            {
                $response['result']  = 'fail';
                $response['message'] = dao::getError();
                $this->send($response);
            }

            $this->loadModel('action')->create('design', $designID, 'created');

            $response['result']  = 'success';
            $response['message'] = $this->lang->saveSuccess;
            $response['locate']  = $this->createLink('design', 'browse', "productID=$productID");
            $this->send($response);
        }

        $this->view->title      = $this->lang->design->create;
        $this->view->position[] = $this->lang->design->create;

        $this->view->users      = $this->loadModel('user')->getPairs('noclosed');
        $this->view->stories    = $this->loadModel('story')->getProductStoryPairs($productID);
        $this->view->products   = $this->loadModel('product')->getPairs($this->session->program);
        $this->view->productID  = $productID;
        $this->view->program    = $this->loadModel('project')->getByID($this->session->program);

        $this->display();
    }

    /**
     * View a design.
     *
     * @param  int    $designID
     * @access public
     * @return void
     */
    public function view($designID = 0)
    {
        $design              = $this->design->getById($designID);
        $design->productName = $this->dao->findByID($design->product)->from(TABLE_PRODUCT)->fetch('name');
        $design->files       = $this->loadModel('file')->getByObject('design', $designID);

        $relations       = $this->loadModel('common')->getRelations('design', $design->id, 'commit');
        $storyTitle      = $this->dao->findByID($design->story)->from(TABLE_STORY)->fetch('title');
        $design->commit = '';
        if(!empty($_GET['onlybody']))
        {
            foreach($relations as $relation) $design->commit .= " #$relation->BID";
            $design->story = $storyTitle;
        }
        else
        {
            foreach($relations as $relation) $design->commit .= html::a(helper::createLink('design', 'revision', "repoID=$relation->BID", '', true), "#$relation->BID", '', "class='iframe' data-width='80%' data-height='550'");
            $design->story = $storyTitle ? html::a($this->createLink('story', 'view', "id=$design->story"), $storyTitle) : '';
        }

        $actions     = $this->loadModel('action')->getList('design', $design->id);

        $this->view->title      = $this->lang->design->designView;
        $this->view->position[] = $this->lang->design->designView;

        $this->view->productID = $design->product;
        $this->view->design    = $design;
        $this->view->relations = $relations;
        $this->view->users     = $this->loadModel('user')->getPairs('noletter');
        $this->view->actions   = $actions;

        $this->display();
    }

    /**
     * Edit a design.
     *
     * @param  int    $designID
     * @access public
     * @return void
     */
    public function edit($designID = 0)
    {
        $design = $this->design->getByID($designID);
        $design = $this->design->getAffectedScope($design);
        $this->design->setProductMenu($design->product);

        if($_POST)
        {
            $changes = $this->design->update($designID);
            if(dao::isError())
            {
                $response['result']  = 'fail';
                $response['message'] = dao::getError();
                $this->send($response);
            }

            $actionID = $this->loadModel('action')->create('design', $designID, 'changed');
            $this->action->logHistory($actionID, $changes);

            $response['result']  = 'success';
            $response['message'] = $this->lang->saveSuccess;
            $response['locate']  = $this->createLink('design', 'view', "id=$design->id");
            $this->send($response);
        }

        $this->view->title      = $this->lang->design->edit;
        $this->view->position[] = $this->lang->design->edit;

        $this->view->design   = $design;
        $this->view->products = $this->loadModel('product')->getPairs($this->session->program);
        $this->view->program  = $this->loadModel('project')->getByID($this->session->program);
        $this->view->stories  = $this->loadModel('story')->getProductStoryPairs($design->product);

        $this->display();
    }

    /**
     * Commit a design.
     *
     * @param  int    $designID
     * @param  string $begin
     * @param  string $end
     * @param  int    $recTotal
     * @param  int    $recPerPage
     * @param  int    $pageID
     * @access public
     * @return void
     */
    public function commit($designID, $begin = '', $end = '', $recTotal = 0, $recPerPage = 50, $pageID = 1)
    {
        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        $program = $this->loadModel('project')->getByID($this->session->program);
        $begin   = $begin ? date('Y-m-d', strtotime($begin)) : $program->begin;
        $end     = $end ? date('Y-m-d', strtotime($end)) : helper::today();

        $repoID    = $this->session->repoID;
        $repo      = $this->loadModel('repo')->getRepoByID($repoID);
        $revisions = $this->repo->getCommits($repo, '', 'HEAD', '', $pager, $begin, $end);

        if($_POST)
        {
            $this->design->linkCommit($designID);

            $result['result']  = 'success';
            $result['message'] = $this->lang->saveSuccess;
            $result['locate']  = 'parent';
            $this->send($result);
        }

        $linkedRevisions = array();
        $relations = $this->loadModel('common')->getRelations('design', $designID, 'commit');
        foreach($relations as $relation) $linkedRevisions[] = $relation->BID;

        $this->view->title           = $this->lang->design->commit;
        $this->view->position[]      = $this->lang->design->commit;

        $this->view->repoID          = $repoID;
        $this->view->repo            = $repo;
        $this->view->revisions       = $revisions;
        $this->view->linkedRevisions = $linkedRevisions;
        $this->view->designID        = $designID;
        $this->view->begin           = $begin;
        $this->view->end             = $end;
        $this->view->design          = $this->design->getByID($designID);
        $this->view->pager           = $pager;

        $this->display();
    }

    /**
     * Delete a design.
     *
     * @param  int    $designID
     * @param  string $confirm
     * @access public
     * @return void
     */
    public function delete($designID, $confirm = 'no')
    {
        if($confirm == 'no')
        {
            die(js::confirm($this->lang->design->confirmDelete, inlink('delete', "designID=$designID&confirm=yes")));
        }
        else
        {
            $this->design->delete(TABLE_DESIGN, $designID);
            die(js::locate($this->session->designList, 'parent'));
        }
    }
}
