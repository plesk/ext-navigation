<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class PetController extends pm_Controller_Action
{
    public function indexAction()
    {
        $this->_addTabs();
        $this->redirect('pet/kitten');
    }

    public function kittenAction()
    {
        $this->_addTabs();
    }

    public function puppyAction()
    {
        $this->_addTabs();
    }

    protected function _addTabs()
    {
        $this->view->tabs = [
            [
                'title' => 'Kitten',
                'action' => 'kitten',
            ],
            [
                'title' => 'Puppy',
                'action' => 'puppy',
            ],
        ];
    }
}
