<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductenController extends Controller
{
    public function showProduct($id, Request $request)
    {
      // return 'category = '. $category . '<br>id = '. $id;
      // return 'de waarde van show_for = '. $request->get('show_form');
      // return view('product', ['id' => $id]);
      // return 'de volledige url = '. $request->fullUrl();
      // return 'De rewuest method = ' . $request->method();
      return response('Not found', 404);
    }
}
