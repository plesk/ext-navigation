<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class Modules_Navigation_PicturePage extends pm_Navigation_OverviewPage
{
    public function getData() {
        return Modules_Navigation_Pictures::$data;
    }

}
