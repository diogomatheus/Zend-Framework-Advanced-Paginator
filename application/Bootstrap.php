<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
    * Init Autoloader
    */
    protected function _initAutoload()
    {
        $loader = Zend_Loader_Autoloader::getInstance();
        $loader->setFallbackAutoloader(true);
    }

    /**
     * Init Paginator
     */
    protected function _initPaginator()
    {
        Zend_Paginator::setDefaultScrollingStyle('Sliding');
        Zend_View_Helper_PaginationControl::setDefaultViewPartial('pagination.phtml');
    }
}

