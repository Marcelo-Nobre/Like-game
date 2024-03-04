<?php

return [
    'env' => [
        'showDevItems' => (bool) env('SHOW_DEV_ITEMS', false),
    ],
    'pages' => [
        'profile' => [
            'form' => [
                'allow_update_self_email' => false,
                'allow_delete_account_action' => false,
            ],
        ],
    ],
    'options' => [
        'allowed_locale' => [
            'en' => [
                'local_name' => 'English',
                'english_name' => 'English',
                'code' => 'en',
            ],
            'pt_BR' => [
                'local_name' => 'Português',
                'english_name' => 'Portuguese',
                'code' => 'pt_BR',
            ],
        ],
    ],
    'menu' => [
        'front_end' => [
            'top_menu' => [],
        ],
        'admin' => [
            'top_menu' => [
                [
                    'label' => 'Dashboard',
                    'route' => 'dashboard',
                    'activeWhenRouteIn' => [
                        'dashboard',
                    ],
                ],
                [
                    'label' => 'Site settings',
                    'activeWhenRouteIn' => [
                        // 'admin.config_site.edit', // TODO
                        'profile.edit',
                    ],
                    'subItems' => [
                        [
                            'label' => 'Sub item 1',
                            'route' => 'profile.edit',
                            'activeWhenRouteIn' => [
                                'profile.edit',
                            ],
                        ],
                        [
                            'label' => 'Sub item 2',
                            'route' => 'profile.edit',
                            'activeWhenRouteIn' => [
                                'profile.edit',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
