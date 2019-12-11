<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function showHome()
    {
      $products = [
        'autoradio',
        'cd speler',
        'speler',
        'test'
      ];

      return view('home', ['producten' => $products]);
    }

    public function showAboutus()
    {
      return view('aboutus');
    }

    public function showName($name){
      
      return view('showName', ['naam' => $name]);
    }
}
