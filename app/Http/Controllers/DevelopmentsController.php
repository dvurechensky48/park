<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Comment;

class DevelopmentsController extends Controller
{
    public function lister()
    {
    	$post = Post::type('developments')->get();
    	for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ?',[$post[$i]->id]);
            $post[$i]['image'] = $img;
        }
    	return view('pages.development-list',[
         	'arResult' =>$post,
         ]);
    }

    public function inner(Request $request, $name)
    {
        
        $post = Post::where('slug','=',$name)
                ->where('type','=','developments')
                ->firstOrFail();
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
