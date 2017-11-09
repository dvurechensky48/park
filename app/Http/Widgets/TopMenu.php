<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Menu;

class TopMenu extends Widget {
	/**
     * @var
     */
    public $menu;
    public $url;


    /**
     * Class constructor.
     */
    public function __construct(){

        $menu = Menu::get();
        $this->menu = $menu; 
        $url = $_SERVER["REQUEST_URI"];
        $url = explode('/', $url);
        array_shift($url);
        for($k=0;$k<count($url);$k++)
        {
            $url_str = $url[$k];
            $url_str = explode('?', $url_str);
            $url[$k] = $url_str[0];
        }
        $this->url = $url;
    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.topmenu', [
            'arResult' => $this->menu,
            'url' => $this->url,
        ]);
     }

}