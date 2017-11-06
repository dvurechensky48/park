<?php namespace App\Http\Widgets\mainpage;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;

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

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.mainpage.news',[
            'arResult' => $this->post,
         ]);
     }

}