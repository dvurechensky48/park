<?php namespace App\Http\Widgets\Mainpage;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;

class Developments extends Widget {
    public $post;
    /**
     * Class constructor.
     */
    public function __construct(){
        $post = Post::published()->where('type', 'developments')
                ->orderBy('publish_at', 'DESC')
                ->limit(3)
                ->get();
        $this->post = $post;
    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.mainpage.developments',[
            'arResult' => $this->post,
         ]);
     }

}