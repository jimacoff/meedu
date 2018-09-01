<?php

return [

    // 会员配置
    'member' => [
        'is_active_default' => \App\User::ACTIVE_NO,
        'is_lock_default' => \App\User::LOCK_NO,

        // 头像
        'default_avatar' => '/images/default_avatar.jpg',
    ],

    // 系统结算
    'credit' => [
        'credit1' => [
            'name' => '余额',
            'use' => true,
        ],
        'credit2' => [
            'name' => '积分',
            'use' => true,
        ],
        'credit3' => [
            'name' => '金币',
            'use' => true,
        ],
    ],

    // 上传
    'upload' => [
        'image' => [
            'disk' => 'public',
            'path' => 'images',
        ],
    ],

    // 管理员配置
    'administrator' => [
        'super_slug' => 'administrator',
    ],
    
    // 支付网关
    'payment' => [
        'youzan' => [
            'client_id' => env('YOUZAN_CLIENT_ID', ''),
            'client_secret' => env('YOUZAN_CLIENT_SECRET', ''),
            'kdt_id' => env('YOUZAN_CLIENT_KDT_ID', ''),
        ],
    ],
];