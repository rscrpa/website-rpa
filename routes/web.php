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

use App\BlogController;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', 'BlogController@getAll');

Route::get('/post/{slug}','BlogController@getPost');

Route::view('/index','index');

Route::view('/sign_in', 'sign_in');

Route::post('/sign_in', 'LoginController@authenticate');

Route::get('/sign_out', 'LoginController@logout');

Route::view('/sign_up','sign_up');
Route::post('/sign_up', 'SignUpController@store');

// Route::view('/blog','blog');

// Route::get('/single','single');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
