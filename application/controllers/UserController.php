<?php
class UserController extends Zend_Controller_Action
{
    public function listAction()
    {
        $page = $this->_getParam('page', 1);

        $userModel = new User();
        // Returns an instance of the class Zend_Db_Table_Select
        $users = $userModel->getAll(true);

        // Returns a rowset
        // $users = $userModel->getAll();

        // First option to use Zend_Paginator_Adapter_DbTableSelect
        $adapter = new Zend_Paginator_Adapter_DbTableSelect($users);
        // $adapter->setRowCount($customCount);
        $paginator = new Zend_Paginator($adapter);

        // Second option to use Zend_Paginator_Adapter_DbTableSelect
        // $paginator = new Zend_Paginator($users);
        // Note: You cannot customize the count in this option

        $paginator->setCurrentPageNumber($page)
                  ->setItemCountPerPage(10);

        $this->view->assign('paginator', $paginator);
    }
}

