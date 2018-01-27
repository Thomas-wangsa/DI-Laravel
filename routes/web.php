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


/*
|--------------------------------------------------------------------------
| Route For Handle Login Logic 
|--------------------------------------------------------------------------
| @author Thomas
| /                     : Auth() ? to route dashboard : to route auth/login
| Auth::routes 			: https://laravel.com/docs/5.5/authentication 
|
*/

Route::get('/', function () {return view('welcome');});
Auth::routes();

/*
|--------------------------------------------------------------------------
| Route For Handle Flow Logic 
|--------------------------------------------------------------------------
| @author Thomas
| /home 		: redirect to /index
| /index 		: show all data based on Nigorice Test # 3
| /show 		: show specific data based on Nigorice Test # 3
| /create 		: page to add new data based on Nigorice Test # 3
| /edit 		: page to edit the data based on Nigorice Test # 3 
|
*/

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/index', 'HomeController@index')->name('index');
Route::get('/show', 'HomeController@show')->name('show');
Route::get('/create', 'HomeController@create')->name('create');
Route::get('/edit', 'HomeController@edit')->name('edit');

/*
|--------------------------------------------------------------------------
| Route For Handle Flow Logic 
|--------------------------------------------------------------------------
| @author Thomas
| /create_post(POST) 		: add new data logic
| /edit_post(POST) 			: edit data logic 
|
*/

Route::post('/create_post', 'HomeController@create_post')->name('create_post');
Route::post('/edit_post', 'HomeController@edit_post')->name('edit_post');

