<?php namespace App\Http\Widgets\Mainpage;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;

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

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.mainpage.information',[
            'arResult' => $this->post,
         ]);
     }

}