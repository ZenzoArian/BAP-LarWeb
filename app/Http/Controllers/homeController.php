<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function showHome()
    {
      $products = [
        'autoradio',
        'cd speler',
        'speler',
        'test'
      ];

      // $companies = DB::select('select * from companies');

      return view('home', ['producten' => $products]);
    }

    public function showAboutus()
    {
      return view('aboutus');
    }

    public function showName($name){

      return view('showName', ['naam' => $name]);
    }
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
