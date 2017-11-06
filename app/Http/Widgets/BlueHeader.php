<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;

class BlueHeader extends Widget {

    /**
     * Class constructor.
     */
    public function __construct(){

    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.blueheader',[
         ]);
     }

}