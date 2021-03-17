<?php


namespace App\Http\Controllers;


use Doctrine\DBAL\Exception;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Config;

class HomeController extends Controller
{
    public function index()
    {
//        DB::insert("INSERT INTO posts (title, content, created_at, updated_at)
//            VALUES (?, ?, ?, ?)", ['article 4', 'lorem ipsum 4', NOW(), NOW()]);
dump(config('app.timezone'));
        DB::update("UPDATE posts SET title = :title, created_at = :created_at, updated_at = :updated_at WHERE title = ''", [':title' => "article 0", ':created_at' => NOW(), 'updated_at' => NOW()]);
        $posts = DB::select("SELECT * FROM posts WHERE id > :id", ['id' => 2]);
//        DB::delete("DELETE FROM posts WHERE id = :id", ['id' => 6]);
        DB::beginTransaction();
        try {
            DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL ", [NOW()]);
            DB::update("UPDATE posts SET updated_at = ? WHERE updated_at IS NULL ", [NOW()]);
        } catch (\Exception $e) {
           DB::rollBack();
           echo $e->getMessage();
        }
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
