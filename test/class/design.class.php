<?php
class designTest
{
    public function __construct()
    {
         global $tester;
         $this->objectModel = $tester->loadModel('design');
    }

    /**
     * Function create test by design
     *
     * @param  int   $projectID
     * @param  array $param
     * @access public
     * @return object
     */
    public function createTest($projectID, $param = array())
    {
        $labels = array();
        $files  = array();

        $createFields = array('product' => '', 'story' => '', 'type' => '', 'name' => '', 'labels' => $labels, 'files' => $files, 'desc' => '');
        foreach($createFields as $field => $defaultValue) $_POST[$field] = $defaultValue;
        foreach($param as $key => $value) $_POST[$key] = $value;

        $objectID = $this->objectModel->create($projectID);

        unset($_POST);

        if(dao::isError()) return dao::getError();

        $objects = $this->objectModel->getByID($objectID);

        return $objects;
    }

    /**
     * Function batchCreate test by desgin
     *
     * @param  int   $projectID
     * @param  int   $productID
     * @param  array $param
     * @access public
     * @return array
     */
    public function batchCreateTest($projectID, $productID, $param = array())
    {
        global $tester;

        $story = array('', '', '', '');
        $type  = array('', '', '', '');
        $name  = array('', '', '', '');
        $desc  = array('', '', '', '');

        $createFields = array('story' => $story, 'type' => $type, 'name' => $name, 'desc' => $desc);
        foreach($createFields as $field => $defaultValue) $_POST[$field] = $defaultValue;
        foreach($param as $key => $value) $_POST[$key] = $value;

        $this->objectModel->batchCreate($projectID, $productID);

        unset($_POST);

        if(dao::isError()) return dao::getError();

        $objects = $tester->dao->select('*')->from(TABLE_DESIGN)->where('project')->eq($projectID)->andwhere('product')->eq($productID)->fetchAll();

        return $objects;
    }

    /**
     * Function update test by desgin
     *
     * @param  int   $designID
     * @param  array $param
     * @access public
     * @return array
     */
    public function updateTest($designID, $param = array())
    {
        global $tester;

        $labels = array();
        $files  = array();

        $createFields = $tester->dao->select('`product`,`story`,`type`,`name`,`desc`')->from(TABLE_DESIGN)->where('id')->eq($designID)->fetchAll();
        $createFields[0]->labels = $labels;
        $createFields[0]->files  = $files;
        foreach($createFields[0] as $field => $defaultValue) $_POST[$field] = $defaultValue;
        foreach($param as $key => $value) $_POST[$key] = $value;

        $objects = $this->objectModel->update($designID);

        unset($_POST);

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function assignTest($designID, $param = array())
    {
        global $tester;

        $createFields = array('assignedTo' => '', 'comment' => '');

        foreach($createFields as $field => $defaultValue) $_POST[$field] = $defaultValue;
        foreach($param as $key => $value) $_POST[$key] = $value;

        $this->objectModel->assign($designID);

        unset($_POST);

        if(dao::isError()) return dao::getError();

        $objects = $tester->dao->select('*')->from(TABLE_DESIGN)->where('id')->eq($designID)->fetchAll();

        return $objects;
    }

    public function linkCommitTest($designID = 0, $repoID = 0)
    {
        $objects = $this->objectModel->linkCommit($designID = 0, $repoID = 0);

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function unlinkCommitTest($designID = 0, $commitID = 0)
    {
        $objects = $this->objectModel->unlinkCommit($designID = 0, $commitID = 0);

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function getByIDTest($designID = 0)
    {
        $objects = $this->objectModel->getByID($designID = 0);

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function getPairsTest($productID = 0, $type = 'all')
    {
        $objects = $this->objectModel->getPairs($productID = 0, $type = 'all');

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function getAffectedScopeTest($design = 0)
    {
        $objects = $this->objectModel->getAffectedScope($design = 0);

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function getListTest($projectID = 0, $productID = 0, $type = 'all', $param = 0, $orderBy = 'id_desc', $pager = null)
    {
        $objects = $this->objectModel->getList($projectID = 0, $productID = 0, $type = 'all', $param = 0, $orderBy = 'id_desc', $pager = null);

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function getCommitTest($designID = 0, $pager = null)
    {
        $objects = $this->objectModel->getCommit($designID = 0, $pager = null);

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function getBySearchTest($projectID = 0, $productID = 0, $queryID = 0, $orderBy = 'id_desc', $pager = null)
    {
        $objects = $this->objectModel->getBySearch($projectID = 0, $productID = 0, $queryID = 0, $orderBy = 'id_desc', $pager = null);

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function setMenuTest($projectID, $products, $productID = 0)
    {
        $objects = $this->objectModel->setMenu($projectID, $products, $productID = 0);

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function buildSearchFormTest($queryID = 0, $actionURL = '')
    {
        $objects = $this->objectModel->buildSearchForm($queryID = 0, $actionURL = '');

        if(dao::isError()) return dao::getError();

        return $objects;
    }

    public function printAssignedHtmlTest($design = '', $users = '')
    {
        $objects = $this->objectModel->printAssignedHtml($design = '', $users = '');

        if(dao::isError()) return dao::getError();

        return $objects;
    }
}
