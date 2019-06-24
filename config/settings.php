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
            'color' => '#579BFC' //blue
        ],
        2 => [
            'title' => 'high',
            'color' => '#FDAB3D' //yellow
        ],
        3 => [
            'title' => 'critical',
            'color' => 'red'
        ],
    ],
    'status' => [
        1 => [
            'title' => 'Not started',
            'color' => '#C4C4C4' // grey
        ],
        2 => [
            'title' => 'Working on',
            'color' => '#FDAB3D' //yellow
        ],
        3 => [
            'title' => 'Waiting',
            'color' => 'red'
        ],
        4 => [
            'title' => 'Done',
            'color' => '#579BFC' //blue
        ],
        5 => [
            'title' => 'Completed',
            'color' => '#C4C4C4' // grey
        ],
    ],

    'request_type' => [
        1 => [
            'title' => 'Color Change Request',
            'color' => 'orange'
        ],
        2 => [
            'title' => 'Customize a Structure',
            'color' => 'red'
        ],
        3 => [
            'title' => '2D Site Layout Overhead',
            'color' => 'green'
        ],
        4 => [
            'title' => '3D Site Rendering',
            'color' => 'grey'
        ],
    ],
    'paginate' => [
        'designer_request_all' => 15
    ],



];