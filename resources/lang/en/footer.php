<?php

return [  
    'newsletter' => 'Subscribe for newsletter',
    'sponsor' => 'Our Sponsors',
    'send' => 'Send',
    'footerMenu' => [
        [
            'id' => 1,
            'name' => 'Our Services',
            'link' => route('home', app()->getLocale())
        ],
        [
            'id' => 2,
            'name' => 'About Us',
            'link' => route('about', app()->getLocale())
        ],
        [
            'id' => 3,
            'name' => 'Poliices',
            'link' => route('policies', app()->getLocale())
        ],
        [
            'id' => 4,
            'name' => 'Offers',
            'link' => route('digitalOffer', app()->getLocale())
        ],
        [
            'id' => 10,
            'name' => 'Privacy Policy',
            'link' => route('privacyPolicy', app()->getLocale())
        ], 
        [
            'id' => 11,
            'name' => 'Contact',
            'link' => route('contactUs', app()->getLocale())
        ], 
        [
            'id' => 12,
            'name' => 'Blog',
            'link' => route('allBlog', app()->getLocale())
        ], 
        [
            'id' => 13,
            'name' => 'FAQ',
            'link' => route('faq', app()->getLocale())
        ]
    ],
    'copyRight' => '© Copyright 2000-'.date('Y').' easylife. All rights reserved',
    'poweredBy' => 'Powered by',
];