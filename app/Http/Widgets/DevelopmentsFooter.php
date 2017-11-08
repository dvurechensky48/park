<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;

class DevelopmentsFooter extends Widget {

    public $post;
    public $url;
    /**
     * Class constructor.
     */
    public function __construct(){
        $url = $_SERVER["REQUEST_URI"];
        $url = explode('/', $url);
        array_shift($url);
        $post = Post::type('developments')->take(6)->get();
        for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ?',[$post[$i]->id]);
            $post[$i]['image'] = $img;
        }
        $this->post = $post;
        $this->url = $url;
    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.developmentsfooter',[
            'arResult' => $this->post,
            'url' => $this->url,
         ]);
     }

}