<?php namespace App\Http\Widgets\Mainpage;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Personal extends Widget {

    public $post;
    /**
     * Class constructor.
     */
    public function __construct(){
        $post = Post::published()->where('type', 'personal')
                ->orderBy('publish_at', 'DESC')
                ->get();
        for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ? limit 1',[$post[$i]->id]);
            $post[$i]['image'] = $img;
            
        }
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
         return view('widgets.mainpage.personal',[
            'arResult' => $this->post,
            'lang' => $this->getLang(),
         ]);
     }

}