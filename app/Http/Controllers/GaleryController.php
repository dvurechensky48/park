<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GaleryController extends Controller
{
    public $seo;

    public function __construct(){
        $post = Post::where('slug','=','galery')
                ->where('type','=','page')
                ->firstOrFail();
        $this->seo = $post;
    }

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

    public function lister()
    {
    	$post = Post::type('galery')->whereDate('created_at','<=' ,Carbon::today())->latest()->paginate(9);
    	
        for($i=0;$i<count($post);$i++)
        {
            $img = DB::select('select * from attachments where post_id = ? limit 1',[$post[$i]->id]);
            $post[$i]['image'] = $img;
        }

    	return view('pages.galery-list',[
         	'arResult' =>$post,
            'SEO' => $this->seo,
            'lang' => $this->getLang(),
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
            'lang' => $this->getLang(),
         ]);
    }
}
