<?php
/**
 * Created by PhpStorm.
 * User: snoskova
 * Date: 07.04.2016
 * Time: 10:38
 */
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
        $this->view->tabs = array(
            array(
                'title' => 'Kitten',
                'action' => 'kitten',
            ),
            array(
                'title' => 'Puppy',
                'action' => 'puppy',
            ),
        );
    }
}
