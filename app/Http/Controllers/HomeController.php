<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        DB::insert("INSERT INTO posts (title, content, created_at, updated_at)
//            VALUES (?, ?, ?, ?)", ['article 4', 'lorem ipsum 4', NOW(), NOW()]);

        DB::update("UPDATE posts SET title = :title, created_at = :created_at, updated_at = :updated_at WHERE title = ''", [':title' => "article 0", ':created_at' => NOW(), 'updated_at' => NOW()]);
        $posts = DB::select("SELECT * FROM posts WHERE id > :id", ['id' => 2]);
        dd($posts);
        return $posts;
//        dump(env('APP_KEY1'));
//        dump(config('database.connections.mysql.database'));

        return view('welcome', ['res' => 5, 'name' => 'john']);
    }

    public function test()
    {
        return __METHOD__;
    }
}
