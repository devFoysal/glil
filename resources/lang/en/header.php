<?php

return [
    'hotline' => '16622 or 09 610000200',
    'headerMenu' => [
        
        [
            'id' => 2,
            'name' => 'Retail',
            'link' => route('retail', app()->getLocale())
        ],
        [
            'id' => 3,
            'name' => 'Corporate',
            'link' => route('corporate', app()->getLocale())
        ],
        [
            'id' => 4,
            'name' => 'Bancassurance',
            'link' => route('bancassurance', app()->getLocale())
        ],
        [
            'id' => 5,
            'name' => 'Micro Insurance',
            'link' => route('microinsurance', app()->getLocale())
        ],
        [
            'id' => 6,
            'name' => 'Claims',
            'link' => route('claims', app()->getLocale())
        ],
        [
            'id' => 7,
            'name' => 'About Us',
            'link' => route('aboutUs', app()->getLocale())
        ]
    ]
];