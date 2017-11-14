<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;
use App\Comment as CommentModel;
use Orchid\CMS\Core\Models\Post;

class Comment extends Widget {

    public $post;
    public $module;
    /**
     * Class constructor.
     */
    public function __construct(){
        $url = $_SERVER["REQUEST_URI"];
        $url = explode('/', $url);
        array_shift($url);

        for($i=0;$i<count($url);$i++)
        {
            $url_str = explode("?", $url[$i]);
            $url_str = array_shift($url_str);
            
            $url[$i] = $url_str;
        }
        $posts = Post::where('slug','=',$url[count($url) - 1])
                ->firstOrFail();
        
        $this->module = $posts->id;  
    }

    /**
     * @return mixed
     */
     public function run(){
        $post = CommentModel::where('post_id','=',$this->module)
                            ->where('approved','=',1)
                            ->get();
        for($i=0;$i<count($post);$i++)
        {
            $date_at = explode(' ', $post[$i]->created_at);
            $date_now = date("Y-m-d");
            $day = $date_at[0];
            if(date("Y-m-d") == $date_at[0])
            {
                $day = 'Сегодня';
            }
            else if(date('Y-m-d', strtotime('yesterday')) == $date_at[0])
            {
                $day = 'Вчера';
            }
            $time = $date_at[1];
            $time = explode(':', $time);
            $post[$i]['time'] = $time[0].":".$time[1];
            $post[$i]['day'] = $day;
        }                    
        $this->post = $post;
         return view('widgets.comment',[
            'arResult' => $this->post,
         ]);
     }

}