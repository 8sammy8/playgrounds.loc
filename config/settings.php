<?php
return [
    'domain_partner' => 'partner',
    'domain_designer' => 'designer',
    'domain_admin' => 'admin',

    'folder_partner' => 'partner',
    'folder_designer' => 'designer',
    'folder_admin' => 'admin',

    'priority' => [
        1 => [
            'title' => 'normal',
            'color' => 'blue'
        ],
        2 => [
            'title' => 'high',
            'color' => 'yellow'
        ],
        3 => [
            'title' => 'critical',
            'color' => 'red'
        ],
    ],
    'status' => [
        1 => [
            'title' => 'Not started',
            'color' => 'grey'
        ],
        2 => [
            'title' => 'Working on',
            'color' => 'orange'
        ],
        3 => [
            'title' => 'Waiting',
            'color' => 'red'
        ],
        4 => [
            'title' => 'Done',
            'color' => 'blue'
        ],
    ],

    'request_type' => [
        1 => [
            'title' => 'Color Change Request',
            'color' => 'orange'
        ]
    ],
    'paginate' => [
        'designer_request_all' => 20
    ]
];