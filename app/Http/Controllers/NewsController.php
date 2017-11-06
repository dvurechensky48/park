<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function lister()
    {
    	$post = Post::type('news')->get();
    	for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ?',[$post[$i]->id]);
            $post[$i]['image'] = $img;
        }
    	return view('pages.development-list',[
         	'arResult' =>$post,
         ]);
    }

    public function inner($name)
    {
        $post = Post::where('slug','=',$name)
                ->where('type','=','news')
                ->firstOrFail();
        return view('pages.development-inner',[
            'arResult' =>$post,
         ]);
    }
}
