<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;

class GaleryController extends Controller
{
    public $seo;

    public function __construct(){
        $post = Post::where('slug','=','galery')
                ->where('type','=','page')
                ->firstOrFail();
        $this->seo = $post;
    }

    public function lister()
    {
    	$post = Post::type('galery')->paginate(9);
    	
        for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ? limit 1',[$post[$i]->id]);
            $post[$i]['image'] = $img;
        }

    	return view('pages.galery-list',[
         	'arResult' =>$post,
            'SEO' => $this->seo,
         ]);
    }
    public function inner($name)
    {
    	$post =  Post::where('slug','=',$name)
                ->where('type','=','galery')
                ->firstOrFail();
    	
        $img = DB::select('select * from attachments where post_id = ?',[$post->id]);
        $post['image'] = $img;

    	return view('pages.galery-inner',[
         	'arResult' =>$post,
         ]);
    }
}
