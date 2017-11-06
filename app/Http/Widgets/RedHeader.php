<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;

class RedHeader extends Widget {

    /**
     * Class constructor.
     */
    public function __construct(){

    }

    /**
     * @return mixed
     */
     public function run(){
            return view('widgets.redheader',[
         ]);
     }

}