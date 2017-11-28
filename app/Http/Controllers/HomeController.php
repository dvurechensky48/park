<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
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
    function getLang()
    {
        $lang = Session::get('local'); 
        if(empty($lang))
        {
            $lang = 'ru';
        }
        if($lang == 'ru')
        {
            $this->lang = 'en';
        }
        else if($lang == 'en')
        {
            $this->lang = 'ru';
        }
        
        return $lang;
    }

    public function index()
    {
        $lang = Session::get('local');
        App::setLocale($lang);

        $post = Post::where('slug','=','index')
                ->where('type','=','page')
                ->firstOrFail();
        return view('pages.index',[
            'SEO' => $post,
            'lang' => $this->getLang(),
         ]);
    }
    public function about()
    {
        $post = Post::where('slug','=','about')
                ->where('type','=','page')
                ->firstOrFail();
        return view('pages.typical',[
            'arResult' =>$post,
            'lang' => $this->getLang(),
         ]);
    }
    public function contact()
    {
        $post = Post::where('slug','=','contacts')
                ->where('type','=','page')
                ->firstOrFail();
        return view('pages.typical',[
            'arResult' =>$post,
            'lang' => $this->getLang(),
         ]);
    }
    public function typical($name)
    {
        $post = Post::where('slug','=',$name)
                ->where('type','=','typical')
                ->firstOrFail();
        return view('pages.typical',[
            'arResult' =>$post,
            'lang' => $this->getLang(),
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
            'lang' => $this->getLang(),
         ]);
        }
        else{
            return redirect('/');
        }

         

    }

    public function test()
    {
        $lang = Session::get('local'); 
        if(empty($lang))
        {
            $lang = 'ru';
        }
        return $lang;
         

    }
}
