<?php

class Modules_Navigation_Navigation extends pm_Hook_Navigation
{
    public function getNavigation()
    {
        return [
            [
                'controller' => 'index',
                'action' => 'index',
                'pages' => [
                    [
                        'controller' => 'document',
                        'action' => 'index',
                        'tabbed' => true,  // Title is the same (Documents) for both tabs.
                        'pages' => [
                            ['controller' => 'document',
                             'action' => 'api',
                             'pages' => [
                             [
                                  'controller' => 'document',
                                  'action' => 'admin',
                                ],
                                [
                                    'controller' => 'document',
                                    'action' => 'client',
                                ],
                                [
                                    'controller' => 'document',
                                    'action' => 'subscription',
                                ],
                             ],
                            ],
                            [
                            'controller' => 'document',
                            'action' => 'extension',
                            'pages' => [
                                 [
                                 'controller' => 'document',
                                 'action' => 'tabs',
                                 'label' => 'Tabs (Label)'  // A page label, such as 'Home' or 'Blog'. (string, optional, by default will be used localized message with key controllers
                                 ],
                                 [
                                 'controller' => 'document',
                                 'action' => 'buttons',
                                 ],
                                [
                                 'controller' => 'document',
                                 'action' => 'forms',
                                ],
                            ],
                            ],
                            [
                            'controller' => 'document',
                            'action' => 'simple',    // Simple page in the same level as tabs in Documents
                            ],
                        ],
                    ],
                    [
                        'controller' => 'pet',
                        'action' => 'index',
                        'tabbed' => false,  // Page title is used for each tab.
                        'pages' => [
                            ['controller' => 'pet',
                             'action' => 'kitten',
                            ],
                            [
                            'controller' => 'pet',
                            'action' => 'puppy',
                            ],
                        ],
                    ],
                    [
                        'controller' => 'picture',
                        'action' => 'index',
                        'pages' => [
                            [
                                'controller' => 'picture',
                                'action' => 'view',
                                'type' => 'Modules_Navigation_PicturePage',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }
}

