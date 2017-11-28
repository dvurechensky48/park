<?php namespace App\Http\Widgets\Mainpage;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\Session;

class Information extends Widget {

    public $post;
    /**
     * Class constructor.
     */
    public function __construct(){
         $post = Post::where('slug','=','information')
                ->where('type','=','page')
                ->firstOrFail();
        $this->post = $post;
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
         return view('widgets.mainpage.information',[
            'arResult' => $this->post,
            'lang' => $this->getLang(),
         ]);
     }

}