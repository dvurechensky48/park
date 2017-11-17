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
        App\Core\Behaviors\Single\IndexSeo::class,
        App\Core\Behaviors\Single\DevelopmentsSeo::class,
        App\Core\Behaviors\Single\NewsSeo::class,
        App\Core\Behaviors\Single\PlacesSeo::class,
        App\Core\Behaviors\Single\GalerySeo::class,
        App\Core\Behaviors\Single\EmploymentSeo::class,
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
        App\Core\Behaviors\Many\Galery::class,
        App\Core\Behaviors\Many\News::class,
        App\Core\Behaviors\Many\Places::class,
        App\Core\Behaviors\Many\Typical::class,
        App\Core\Behaviors\Many\Partner::class,
        App\Core\Behaviors\Many\Employment::class,
        App\Core\Behaviors\Many\EmploymentSport::class,
        App\Core\Behaviors\Many\EmploymentAtrakc::class,
        App\Core\Behaviors\Many\EmploymentConcert::class,
        App\Core\Behaviors\Many\EmploymentEda::class,
        App\Core\Behaviors\Many\EmploymentEksk::class,
        App\Core\Behaviors\Many\EmploymentKwest::class,
        App\Core\Behaviors\Many\Personal::class,
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
        'ru' => [
            'name'     => 'Russian',
            'script'   => 'Rus',
            'dir'      => 'ru',
            'native'   => 'Russia',
            'regional' => 'ru_RUS',
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
