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
                'label' => 'Settings',
                'subItems' => [
                    [
                        'route' => null,
                        'url' => '#!',
                        'icon' => null,
                        'label' => 'Sub item 1',
                    ],
                    [
                        'route' => null,
                        'url' => '#!',
                        'icon' => null,
                        'label' => 'Sub item 2',
                    ],
                ],
            ],
        ],
    ],
];
