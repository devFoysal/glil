<?php

return [  
    'newsletter' => 'নিউজলেটারের জন্য সাবস্ক্রাইব করুন',
    'sponsor' => 'আমাদের স্পন্সরস',
    'send' => 'পাঠান',
    'footerMenu' => [
        [
            'id' => 1,
            'name' => 'আমাদের সেবাসমূহ',
            'link' => route('home', app()->getLocale())
        ],
        [
            'id' => 2,
            'name' => 'আমাদের সম্পর্কে',
            'link' => route('about', app()->getLocale())
        ],
        [
            'id' => 3,
            'name' => 'নীতিসমূহ',
            'link' => route('policies', app()->getLocale())
        ],
        [
            'id' => 4,
            'name' => 'অফার',
            'link' => route('digitalOffer', app()->getLocale())
        ],
        [
            'id' => 10,
            'name' => 'গোপনীয়তা নীতি',
            'link' => route('privacyPolicy', app()->getLocale())
        ], 
        [
            'id' => 11,
            'name' => 'যোগাযোগ',
            'link' => route('contactUs', app()->getLocale())
        ], 
        [
            'id' => 12,
            'name' => 'ব্লগ',
            'link' => route('allBlog', app()->getLocale())
        ], 
        [
            'id' => 13,
            'name' => 'প্রশ্নাবলী',
            'link' => route('faq', app()->getLocale())
        ]
    ],
    'copyRight' => "© কপিরাইট 2000-".date('Y')." সহজলভ্য। সমস্ত অধিকার সংরক্ষিত",
    'poweredBy' => 'পাওয়ার্ড বাই',
];