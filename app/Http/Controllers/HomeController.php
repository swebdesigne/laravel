<?php


namespace App\Http\Controllers;


use App\Models\Post;
use Doctrine\DBAL\Exception;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Config;

class HomeController extends Controller
{
    public function index()
    {
        $post = new Post();
        $post->title = 'Статья 2';
//        $post->content = "Lorem Ipsum 1";
        $post->save();
        return view('welcome', ['res' => 5, 'name' => 'john']);
    }

    public function test()
    {
        return __METHOD__;
    }
}
