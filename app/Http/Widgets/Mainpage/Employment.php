<?php namespace App\Http\Widgets\Mainpage;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;

class Employment extends Widget {
    public $post;
    /**
     * Class constructor.
     */
    public function __construct(){
        $post = Post::published()->where('type', 'employment')
                ->orderBy('publish_at', 'DESC')
                ->get();
        for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ?',[$post[$i]->id]);
            for($k=0;$k<count($img);$k++)
            {
                if($img[$k]->extension == 'svg')
                {
                    $post[$i]['image'] = $img[$k];
                }
            }
            
        }
        $this->post = $post;
    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.mainpage.employment',[
            'arResult' => $this->post,
         ]);
     }

}