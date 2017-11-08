<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Single Behaviors
    |--------------------------------------------------------------------------
    |
    | Static pages
    |
    */

    'single' => [
        App\Core\Behaviors\Single\About::class,
        App\Core\Behaviors\Single\Information::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Many Behaviors
    |--------------------------------------------------------------------------
    |
    | An abstract pattern of behavior record
    |
    */

    'many' => [
        App\Core\Behaviors\Many\MainSlider::class,
        App\Core\Behaviors\Many\Developments::class,
        App\Core\Behaviors\Many\Employment::class,
        App\Core\Behaviors\Many\Galery::class,
        App\Core\Behaviors\Many\News::class,
        App\Core\Behaviors\Many\Places::class,
        App\Core\Behaviors\Many\Typical::class,
        App\Core\Behaviors\Many\Partner::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Available menu
    |--------------------------------------------------------------------------
    |
    | Marked menu areas
    |
    */

    'menu' => [
        'header'  => 'Top Menu',
        'mobile' => 'Mobile Menu',
    ],

    /*
    |--------------------------------------------------------------------------
    | Images
    |--------------------------------------------------------------------------
    |
    | Image processing 100x150x75
    | 100 - integer width
    | 150 - integer height
    | 75  - integer quality
    |
    */

    'images' => [
        'low'    => [
            'width'   => '50',
            'height'  => '50',
            'quality' => '50',
        ],
        'medium' => [
            'width'   => '600',
            'height'  => '300',
            'quality' => '75',
        ],
        'high'   => [
            'width'   => '1000',
            'height'  => '500',
            'quality' => '95',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Available locales
    |--------------------------------------------------------------------------
    |
    | Localization of records
    |
    */

    'locales'      => [
        'en' => [
            'name'     => 'English',
            'script'   => 'Latn',
            'dir'      => 'ltr',
            'native'   => 'English',
            'regional' => 'en_GB',
            'required' => true,
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | Advertising areas
    |--------------------------------------------------------------------------
    |
    | Starred areas for ad units
    |
    */
    'advertising'  => [
        'top'    => 'Top banner',
    ],


    /*
    |--------------------------------------------------------------------------
    | Attachment types
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */
    'attachment'   => [
        'image' => [
            'png',
            'jpg',
            'jpeg',
            'gif',
        ],
        'video' => [
            'mp4',
            'mkv',
        ],
        'docs'  => [
            'doc',
            'docx',
            'pdf',
            'xls',
            'xlsx',
            'xml',
            'txt',
            'zip',
            'rar',
            'svg',
            'ppt',
            'pptx',
        ],
    ],

];
