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
    return view('guests.home');
})->name('guestHome');

Auth::routes();


//Route::get('admin/home', 'Admin\HomeController@index')->name('home'); alternativa

Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});

//middleware tolto dal controller

Route::get('posts', 'PostController@index')->name('guests.home');
Route::get('posts/show/{slug}', 'PostController@show')->name('guests.show');