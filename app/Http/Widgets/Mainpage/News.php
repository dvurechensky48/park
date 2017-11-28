<?php namespace App\Http\Widgets\mainpage;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\Session;

class News extends Widget {

    public $post;
    /**
     * Class constructor.
     */
    public function __construct(){
        $post = Post::published()->where('type', 'news')
                ->orderBy('publish_at', 'DESC')
                ->limit(4)
                ->get();
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
         return view('widgets.mainpage.news',[
            'arResult' => $this->post,
            'lang' => $this->getLang(),
         ]);
     }

}