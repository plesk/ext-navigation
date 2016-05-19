<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class Modules_Navigation_CustomButtons extends pm_Hook_CustomButtons
{
    public function getButtons()
    {
        return [[
            'place' => self::PLACE_ADMIN_NAVIGATION,
            'title' => 'Navigation Ext',
            'description' => pm_Locale::lmsg('commonButtonDescription'),
            'link' => pm_Context::getActionUrl('index'),
        ],];
    }
}
