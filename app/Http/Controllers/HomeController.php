<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index() {
        return view('welcome', ['res' => 5, 'name' => 'john']);
    }

    public function test() {
        return __METHOD__;
    }
}
