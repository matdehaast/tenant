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

use App\Post;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('{tenant_slug}')->middleware('tenant')->group(function () {
    Route::get('/', function ($tenant_slug) {
        dd(Post::all());
        return response('Here',200);
    });
});
