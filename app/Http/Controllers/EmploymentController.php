<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\CMS\Core\Models\Post;
use Illuminate\Support\Facades\DB;

class EmploymentController extends Controller
{
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
         ]);
    }

    public function inner($name)
    {
    	$post = Post::where('slug','=',$name)
                ->where('type','=','employment')
                ->firstOrFail();
        return view('pages.employment-inner',[
            'arResult' =>$post,
         ]);
    }
}
