<?php
class Modules_Navigation_PicturePage extends pm_Navigation_OverviewPage
{
    public function getData() {
        return Modules_Navigation_Pictures::$data;
    }

}
