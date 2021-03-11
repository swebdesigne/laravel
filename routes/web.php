<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

/**
 * variables add Routes
 */

//Route::get('/', function() {
//    return "<h1>Hello world<h1>";
//});

//Route::get('/', function () {
//    return view("about");
//});

//Route::get('/', function () {
//    $res = 2 + 3;
//    $name = "John";
//    return view("about")->with('var', $res);
//});

//Route::get('/', function () {
//    return view("about", ['name' => 'igor', 'age' => 33]);
//});

Route::get('/about', function () {
    $res = 2 + 3;
    $name = "John";
    return view("about", compact('res', 'name'));
});


//Route::get('/contact', function() {
//    return view("contact");
//});
//
//Route::post('/send-email', function () {
//    if (!empty($_POST)) {
//        dump($_POST);
//    }
//    return "E-mail was been send";
//});

//Route::match(['post', 'get'], '/contact', function () {
//    if (!empty($_POST)) {
//        dump($_POST);
//    }
//    return view("contact");
//});

Route::match(['post', 'get', 'put'], '/contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view("contact");
})->name("contact");

Route::view('/test', 'test', ['test' => 'test']);

//Route::redirect('/about', '/contact');
//Route::redirect('/about', '/contact', '301');
//Route::permanentRedirect('/about', '/contact');

//[0-9a-z_]
//Route::get('/post/{id}', function($id) {
//    return "Post $id";
//});
//

Route::get('/post/{id}/{slug?}', function($id, $slug = null) {
    return "Post $id | $slug";
})->name('post');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/posts/create', function () {
        return "Posts Create";
    });

    Route::get('/posts', function () {
        return "Posts List";
    });

    Route::get('/post/{id}/edit', function ($id) {
        return "Edit post # $id";
    })->name('post');
});

Route::fallback(function () {
//    return redirect()->route('home');
    abort(404, 'Oops! Page not found...');
});

