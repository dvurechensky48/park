<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;

class AllPark extends Widget {

    
    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.allpark',[
         ]);
     }

}