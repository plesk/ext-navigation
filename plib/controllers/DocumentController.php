<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class DocumentController extends pm_Controller_Action
{

    public function indexAction()
    {
        $this->_addTabs();
        $this->redirect('document/api');
    }

    public function apiAction()
    {
        $this->_addTabs();
    }

    public function extensionAction()
    {
        $this->_addTabs();
    }

    public function adminAction()
    {

    }

    public function clientAction()
    {

    }

    public function subscriptionAction()
    {

    }

    public function tabsAction()
    {

    }

    public function buttonsAction()
    {

    }

    public function formsAction()
    {

    }

    public function simpleAction()
    {

    }

    protected function _addTabs()
    {
        $this->view->tabs = [
            [
                'title' => 'Docs on API-RPC',
                'action' => 'api',
            ],
            [
                'title' => 'Docs on Extensions',
                'action' => 'extension',
            ],
        ];
    }

}
