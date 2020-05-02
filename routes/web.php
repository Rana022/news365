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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Admin
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'namespace'=>'Admin', 'middleware'=>['auth', 'admin']], function(){
     Route::get('dashboard', 'DashboardController@view')->name('dashboard');
     Route::resource('article','ArticleController');
     Route::resource('category','CategoryController');
     Route::resource('tag','TagController');
});
//Author
Route::group(['prefix'=>'author', 'as'=>'author.', 'namespace'=>'Author', 'middleware'=>['auth', 'author']], function(){
    Route::get('dashboard', 'DashboardController@view')->name('dashboard');
});

//category controller
Route::get('category', 'CategoryController@index')->name('category');
//socialite
Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook');