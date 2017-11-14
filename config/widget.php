<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Class Widgets
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */
    'widgets' => [
        'TopMenu' => App\Http\Widgets\TopMenu::class,
        'Footer' => App\Http\Widgets\Footer::class,
        'MainSlider' => App\Http\Widgets\MainSlider::class,
        'BlueHeader' => App\Http\Widgets\BlueHeader::class,
        'RedHeader' => App\Http\Widgets\RedHeader::class,
        'MenuEmployment' => App\Http\Widgets\MenuEmployment::class,
        'GalerySlidebar' => App\Http\Widgets\GalerySlidebar::class,
        'GalerySlidebarInner' => App\Http\Widgets\GalerySlidebarInner::class,
        'DevelopmentsSlidebar' => App\Http\Widgets\DevelopmentsSlidebar::class,
        'Information' => App\Http\Widgets\Mainpage\Information::class,
        'Developments' => App\Http\Widgets\Mainpage\Developments::class,
        'News' => App\Http\Widgets\Mainpage\News::class,
        'Employment' => App\Http\Widgets\Mainpage\Employment::class,
        'Comment' => App\Http\Widgets\Comment::class,
        'DevelopmentsFooter' => App\Http\Widgets\DevelopmentsFooter::class,
        'SearchConsole' => App\Http\Widgets\SearchConsole::class,
        'Partner' => App\Http\Widgets\Mainpage\Partner::class,
        'Personal' => App\Http\Widgets\Mainpage\Personal::class,
    ],
];
