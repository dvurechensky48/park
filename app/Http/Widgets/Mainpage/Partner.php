<?php namespace App\Http\Widgets\Mainpage;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;

class Partner extends Widget {

    public $post;
    /**
     * Class constructor.
     */
    public function __construct(){
        $post = Post::published()->where('type', 'partner')
                ->orderBy('publish_at', 'DESC')
                ->get();
        for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ?',[$post[$i]->id]);
            for($k=0;$k<count($img);$k++)
            {
                $post[$i]['image'] = $img;
            }
            
        }
        $this->post = $post;
    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.mainpage.partner',[
            'arResult' => $this->post,
         ]);
     }

}