<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;

class GalerySlidebar extends Widget {

    public $post;
    /**
     * Class constructor.
     */
    public function __construct(){
        $post = Post::type('galery')->get();
        for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ?',[$post[$i]->id]);
            $post[$i]['image'] = $img;
        }
        $this->post = $post;
    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.galeryslidebar',[
            'arResult' => $this->post
         ]);
     }

}