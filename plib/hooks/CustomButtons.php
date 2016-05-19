<?php
/**
 * Created by PhpStorm.
 * User: snoskova
 * Date: 08.04.2016
 * Time: 14:47
 */

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
