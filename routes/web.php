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

Route::get('/', 'IndexController@index')->name('index');

Route::get('om-admin', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/{slug}', ['uses' => 'PostController@show', 'as' => 'post.show']);

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'posts', 'as' => 'post.'], function (){
        Route::get('create', ['uses' => 'PostController@create', 'as' => 'create']);
        Route::post('store', ['uses' => 'PostController@store', 'as' => 'store']);
    });
});

