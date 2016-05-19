<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class PictureController extends pm_Controller_Action
{

    public function indexAction()
    {
        $this->view->list = $this->_getPicturesList();
    }

    public function listDataAction()
    {
        $this->_helper->json($this->_getPicturesList()->fetchData());
    }

    public function viewAction()
    {
        $this->view->assign(Modules_Navigation_Pictures::getById($this->_request->getParam('id')));
    }

    protected function _getPicturesList()
    {
        $data = array_map(function ($picture) {
            return [
                'column-1' => '<a href=' . pm_Context::getActionUrl('picture', 'view') . '/id/' . $picture['id'] . '>' . $picture['title'] . '</a>',
                'column-2' => $picture['address'],
            ];
        }, Modules_Navigation_Pictures::$data);

        $list = new pm_View_List_Simple($this->view, $this->_request);
        $list->setData($data);
        $list->setColumns([
            'column-1' => [
                'title' => 'Name',
                'noEscape' => true,
                'searchable' => true,
            ],
            'column-2' => [
                'title' => 'Address',
                'noEscape' => true,
                'searchable' => true,
            ],
        ]);
        // Take into account listDataAction corresponds to the URL /list-data/
        $list->setDataUrl(['action' => 'list-data']);

        return $list;
    }
}
