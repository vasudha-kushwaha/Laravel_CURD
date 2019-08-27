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

// Todos Routes-Start

Route::get('todo', 'TodoController@index')->name('curd.view');
//same name kai 2 route ni hotai h

Route::get('home', 'TodoController@home')->name('curd.home');

Route::get('about', 'TodoController@about')->name('curd.about');

Route::get('blogs', 'TodoController@blogs')->name('curd.blogs');

Route::get('authors', 'TodoController@authors')->name('curd.authors');

Route::get('admin', 'TodoController@adminlogin')->name('curd.adminlogin');

Route::get('curd', 'TodoController@curd')->name('curd.curd');

//Route::get('insert', 'TodoController@insert')->name('curd.insert');

Route::post('in','TodoController@in')->name('curd.in');

Route::get('view_records','TodoController@disp')->name('curd.display');

Route::get('edit/{id}','TodoController@show');

Route::post('edit/{id}','TodoController@edit');

Route::get('delete/{id}','TodoController@destroy'); 

//Todos Routes-End>middelware('auth')