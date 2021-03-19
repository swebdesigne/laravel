<?php


namespace App\Http\Controllers;


use Doctrine\DBAL\Exception;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Config;

class HomeController extends Controller
{
    public function index()
    {
//        $data = DB::table('country')->limit(5)->orderBy('Code', 'desc')->get();
//        $data = DB::table('country')->select('Code', 'Name')->limit(5)->orderBy('Code', 'desc')->get();
//        $data = DB::table('country')->orderBy('Code', 'ASC')->select('Code', 'Name')->first();
//        $data = DB::table('country')->orderBy('Code', 'ASC')->select('Code', 'Name')->first();
//        $data = DB::table('city')->select('ID', 'Name')->find(2);
//        $data = DB::table('city')->select('ID', 'Name')->where("ID", "=", "2")->get();
//        $data = DB::table('city')->select('ID', 'Name')->where([
//            ["id", ">", 1],
//            ["id", "<", 5],
//        ])->get();
//        $data = DB::table('city')->where([
//            ["id", ">", 1],
//            ["id", "<", 5],
//        ])->get();
//        $data = DB::table('city')->where([["id", ">", 1]])->value("Name");
//        $data = DB::table('Country')->limit(10)->pluck('Name', "Code");
//        $data = DB::table('Country')->count();
//        $data = DB::table('Country')->max('Population');
//        $data = DB::table('Country')->min('Population');
//        $data = DB::table('Country')->sum('Population');
//        $data = DB::table('Country')->avg('Population');
//        $data = DB::table('city')->select('CountryCode')->distinct()->get();
        $data = DB::table('city')->select('city.ID', 'city.Name as city_name', 'country.Code', 'country.Name as country_name')->limit(10)
        ->join('country', 'city.CountryCode', '=', 'country.Code')->orderBy('city.ID')->get();
        dd($data);
        return view('welcome', ['res' => 5, 'name' => 'john']);
    }

    public function test()
    {
        return __METHOD__;
    }
}
