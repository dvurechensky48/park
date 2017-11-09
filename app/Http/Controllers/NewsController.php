<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Comment;

class NewsController extends Controller
{
    public $seo;

    public function __construct(){
        $post = Post::where('slug','=','news')
                ->where('type','=','page')
                ->firstOrFail();
        $this->seo = $post;
    }

    public function lister()
    {
        $url = $_SERVER["REQUEST_URI"];
        $url = explode('/', $url);
        array_shift($url);
    	$post = Post::type('news')->get();
    	for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ?',[$post[$i]->id]);
            $post[$i]['image'] = $img;
        }
    	return view('pages.development-list',[
         	'arResult' =>$post,
            'url' =>$url,
            'SEO' => $this->seo,
         ]);
    }

    public function inner(Request $request, $name)
    {
        $post = Post::where('slug','=',$name)
                ->where('type','=','news')
                ->firstOrFail();
        $img = DB::select('select * from attachments where post_id = ?',[$post->id]);
        $post['image'] = $img;
        if($request->input('name') && $request->input('content'))
        {
            if(iconv_strlen($request->input('name')) > 0 && iconv_strlen($request->input('name')) < 50 && iconv_strlen($request->input('content')) > 0)
            {
                $comment = new Comment;
                $comment->post_id = $post->id;
                $comment->user_id = 1;
                $comment->parent_id = 1;
                $comment->content = $request->input('content');
                $comment->name = $request->input('name');
                $comment->approved = true;
                $comment->save();
            }
        }
        return view('pages.development-inner',[
            'arResult' =>$post,
         ]);
    }
}
