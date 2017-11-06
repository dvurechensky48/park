<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;

class Footer extends Widget {
    public function run(){
         return view('widgets.footer',[
         ]);
     }

}