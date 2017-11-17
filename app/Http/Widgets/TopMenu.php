<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Menu;
use Illuminate\Support\Facades\Session;

class TopMenu extends Widget {
	/**
     * @var
     */
    public $menu;
    public $url;
    public $lang;


    /**
     * Class constructor.
     */
    public function __construct(){
        $lang = $this->getLang();
        $menu = Menu::where('lang',$lang)->get();
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

    function getLang()
    {
        $lang = Session::get('local'); 
        if(empty($lang))
        {
            $lang = 'ru';
        }
        if($lang == 'ru')
        {
            $this->lang = 'en';
        }
        else if($lang == 'en')
        {
            $this->lang = 'ru';
        }
        
        return $lang;
    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.topmenu', [
            'arResult' => $this->menu,
            'url' => $this->url,
            'lang' => $this->lang,
        ]);
     }

}