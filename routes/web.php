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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/index', 'HomeController@index')->name('index');
Route::get('/show', 'HomeController@show')->name('show');
Route::get('/create', 'HomeController@create')->name('create');
Route::post('/create_post', 'HomeController@create_post')->name('create_post');
Route::get('/edit', 'HomeController@edit')->name('edit');
Route::post('/edit_post', 'HomeController@edit_post')->name('edit_post');

