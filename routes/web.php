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

Route::get('/blogs', 'BlogController@index')->name('blog.index')->middleware('auth');
Route::get('/blogs/create', 'BlogController@create')->name('blog.create');
Route::post('/blogs', 'BlogController@store')->name('blog.store');
Route::get('/blogs/{id}', 'BlogController@show')->name('blog.show')->middleware('auth');
Route::delete('/blogs/{id}', 'BlogController@destroy')->name('blog.destroy')->middleware('auth');

Auth::routes(
    [
        "register" => true,
    ]
);

Route::get('/home', 'HomeController@index')->name('home');


