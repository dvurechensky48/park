<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class MainSlider extends Widget {
    /**
     * @var
     */
    public $slider;
    
    /**
     * Class constructor.
     */
    public function __construct(){
        $slider = Post::type('mainslider')->get();
        for($i=0;$i<count($slider);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ?',[$slider[$i]->id]);
            $slider[$i]['image'] = $img;
        }
        
        $this->slider = $slider;
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
         return view('widgets.mainslider',[
            'arResult' => $this->slider,
            'lang' => $this->getLang(),
         ]);
     }

}