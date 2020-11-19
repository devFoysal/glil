<?php

return [  
    'hotline' => '১৬৬২২ অথবা ০৯ ৬১০০০০২০০',
    'headerMenu' => [
        [
            'id' => 2,
            'name' => 'রিটেইল',
            'link' => route('retail', app()->getLocale())
        ],
        [
            'id' => 3,
            'name' => 'করপোরেট',
            'link' => route('corporate', app()->getLocale())
        ],
        [
            'id' => 4,
            'name' => 'ব্যানকেসুরেন্স',
            'link' => route('bancassurance', app()->getLocale())
        ],
        [
            'id' => 5,
            'name' => 'মাইক্র ইন্সুরেন্স',
            'link' => route('microInsurance', app()->getLocale())
        ],
        [
            'id' => 6,
            'name' => 'ক্লেইমস',
            'link' => route('claims', app()->getLocale())
        ],
        [
            'id' => 7,
            'name' => 'আমাদের সর্স্পকে',
            'link' => route('aboutUs', app()->getLocale())
        ]
    ]
];