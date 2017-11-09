<?php namespace App\Http\Widgets;

use Orchid\Widget\Service\Widget;
use Orchid\CMS\Core\Models\Post;
use Orchid\CMS\Core\Models\Menu;

class BlueHeader extends Widget {
    public $post;
    public $post1;
    public $url;
    /**
     * Class constructor.
     */
    public function __construct(){
        $posts = Post::select('slug','content')->where('type','!=','page')
                ->get();
        $url = $_SERVER["REQUEST_URI"];
        $url = explode('/', $url);
        array_shift($url);
        $urlEnd = explode('?', $url[count($url) - 1]);
        $url[count($url) - 1] = array_shift($urlEnd);
        $this->url = $url;
        for($i=0;$i<count($url);$i++)
        {
            $url_str = explode("?", $url[$i]);
            $url_str = array_shift($url_str);
            for($k=0;$k<count($posts);$k++)
            {
                if($url_str == $posts[$k]->slug)
                {
                    $this->post = $posts[$k];
                    return;
                }
            }
            
        }
        if(empty($this->post))
        {
            $menu = Menu::get();
            $url = $_SERVER["REQUEST_URI"];
            $url = explode('/', $url);
            array_shift($url);
            $urlEnd = explode('?', $url[count($url) - 1]);
            $url[count($url) - 1] = array_shift($urlEnd);
            $this->url = $url;
            for($i=0;$i<count($menu);$i++)
            {
                if($menu[$i]->slug == "/".$url[0])
                {
                    $this->post1 = $menu[$i];
                }
            }
        }

    }

    /**
     * @return mixed
     */
     public function run(){
         return view('widgets.blueheader',[
            'arResult' => $this->post,
            'arResult1' => $this->post1,
            'url' => $this->url,
         ]);
     }

}