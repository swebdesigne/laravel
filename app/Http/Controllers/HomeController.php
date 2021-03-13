<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        dump(env('APP_KEY1'));
        dump(config('database.connections.mysql.database'));
        return view('welcome', ['res' => 5, 'name' => 'john']);
    }

    public function test()
    {
        return __METHOD__;
    }
}
