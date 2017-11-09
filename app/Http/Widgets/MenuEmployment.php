<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;

class MenuEmployment extends Widget {

    public $menu;
    public $url;
    /**
     * Class constructor.
     */
    public function __construct(){
        $menu = Post::where('type','=','employment')->get();
        $url = $_SERVER["REQUEST_URI"];
        $url = explode('/', $url);
        array_shift($url);
        $this->menu = $menu;
        $this->url = $url;
    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.menuemployment',[
            'arResult' => $this->menu,
            'url' => $this->url,
         ]);
     }

}