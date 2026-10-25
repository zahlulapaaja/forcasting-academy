<?php

/*
 | Menu utama (header bawah). Edit di sini saja, view otomatis menyesuaikan.
 |
 | Key tiap item:
 |   title    : teks menu
 |   url      : path (mis. '/dashboard') atau '#'
 |   active   : pola request()->is(), mis. 'dashboard*'
 |   icon     : (opsional) class ikon Keen, mis. 'ki-rocket'
 |   children : (opsional) submenu, bisa bersarang berapa pun
 */
return [
    'main' => [
        [
            'title' => 'Home',
            'children' => [
                ['title' => 'Projects',  'url' => '/dashboard', 'active' => 'dashboard', 'icon' => 'ki-abstract-44'],
                ['title' => 'Online Courses', 'url' => '/dashboard/online-courses', 'active' => 'dashboard/online-courses*', 'icon' => 'ki-color-swatch', 'paths' => 21],
                // ['title' => 'eCommerce', 'url' => '#',          'icon' => 'ki-basket'],
            ],
        ],
        // [
        //     'title' => 'Master Data',
        //     'children' => [
        //         ['title' => 'Pengguna', 'url' => '#', 'icon' => 'ki-shield-tick', 'children' => [
        //             ['title' => 'Daftar Pengguna', 'url' => '#'],
        //             ['title' => 'Peran',           'url' => '#'],
        //         ]],
        //         ['title' => 'Produk', 'url' => '#', 'icon' => 'ki-handcart'],
        //     ],
        // ],
        ['title' => 'Try Out', 'url' => '#'],
    ],
];
