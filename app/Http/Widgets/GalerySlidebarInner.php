<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;


class GalerySlidebarInner extends Widget {

     public $post;
    /**
     * Class constructor.
     */
    public function __construct(){
        $post = Post::type('galery')->whereDate('created_at','<' ,'2017-12-01 15:05:33')->latest()->get();
        for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ? limit 1',[$post[$i]->id]);
            $post[$i]['image'] = $img;
        }
        $this->post = $post;
    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.galeryslidebarinner',[
            'arResult' => $this->post
         ]);
     }

}