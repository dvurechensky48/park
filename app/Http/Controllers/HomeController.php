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
        $post = Post::where('slug','=','index')
                ->where('type','=','page')
                ->firstOrFail();
        return view('pages.index',[
            'SEO' => $post,
         ]);
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
    public function search(Request $request)
    {
        if($request->input('q'))
        {
         $posts = Post::whereIn('type', ['news','developments','places'])->take(20)->get();
         $search = array();
         for($i=0;$i<count($posts);$i++)
         {
            if(strripos($posts[$i]->content['en']['body'], $request->input('q')))
            {
                $search[] = $posts[$i];
            }
         }
         
         return view('pages.search',[
            'arResult' => $search,
         ]);
        }
        else{
            return redirect('/');
        }

         

    }

    public function test()
    {
        
        return view('pages.test',[
          ]);
         

    }
}
