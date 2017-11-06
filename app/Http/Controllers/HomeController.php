<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        $post = Post::where('slug','=','about')
                ->where('type','=','page')
                ->firstOrFail();
        return view('pages.typical',[
            'arResult' =>$post,
         ]);
    }
    public function typical($name)
    {
        $post = Post::where('slug','=',$name)
                ->where('type','=','typical')
                ->firstOrFail();
        return view('pages.typical',[
            'arResult' =>$post,
         ]);
    }
    public function test(Request $request)
    {
        echo('HELLO');
        echo('<br>');
        $name = $request->input('name');
        echo($name);
        $post = new Comment;
        $post->post_id = 3;
        $post->user_id = 1;
        $post->parent_id = 1;
        $post->content = 'Че за хуйня';
        $post->approved = true;
        $post->save();
    }
}
