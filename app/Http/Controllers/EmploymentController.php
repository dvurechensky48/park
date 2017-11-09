<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;

class EmploymentController extends Controller
{
    public $seo;

    public function __construct(){
        $post = Post::where('slug','=','employment')
                ->where('type','=','page')
                ->firstOrFail();
        $this->seo = $post;
    }

    public function lister()
    {
    	$post = Post::type('employment')->get();
    	for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ?',[$post[$i]->id]);
            $post[$i]['image'] = $img;
        }
    	return view('pages.employment-list',[
         	'arResult' =>$post,
            'SEO' =>$this->seo,
         ]);
    }

    public function getSeo($name)
    {
        $post = Post::where('slug','=', $name)
                ->where('type','=','employment')
                ->firstOrFail();
        return $post;
    }

    public function inner($name)
    {
    	$post = Post::where('type','=',$name)
                ->get();
        for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ?',[$post[$i]->id]);
            $post[$i]['image'] = $img;
        }
        return view('pages.employment-inner',[
            'arResult' =>$post,
            'SEO' => $this->getSeo($name),
         ]);
    }

    public function view($name, $view)
    {
      $post = Post::where('slug','=',$view)
                ->where('type','=',$name)
                ->firstOrFail();
        
        $img = DB::select('select * from attachments where post_id = ?',[$post->id]);
        $post['image'] = $img;
        
        return view('pages.employment-view',[
            'arResult' =>$post,
         ]);  
    }
}
