<?php

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

Route::get('/',"HomeController@showHome")->name('homepage');
Route::get('/over-ons-bedrijf',"HomeController@showAboutus")->name('about-us');
Route::get('/hoihoihoi/{name}','HomeController@showName')->name('show-name');

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/contact', function () {
    return 'Contact!';
});

Route::get('/producten', 'ProductController@index')->name('ptoducten');
Route::get('/dit/is/een/lange-url/zeg', 'PageController@longUrl')->name('page');
Route::redirect('/korte-url', '/dit/is/een/lange-url/zeg')->name('korteUrl');

Route::get('/producten/{id}','ProductenController@showProduct')->where('id', '[0-9]+');

Route::prefix('admin')->group(function(){
  Route::get('users', function(){ return 'users'; });
  Route::get('products', function(){ return 'products'; });
  Route::get('categories', function(){ return 'categories'; });
});
