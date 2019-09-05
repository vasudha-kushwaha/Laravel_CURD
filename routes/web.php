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

Route::get('php_directives', 'TodoController@php_directives')->name('php_directives');

Route::get('myhome', 'TodoController@home')->name('curd.myhome');

Route::get('about', 'TodoController@about')->name('curd.about');

Route::get('blogs', 'TodoController@blogs')->name('curd.blogs');

Route::get('authors', 'TodoController@authors')->name('curd.authors');

Route::get('admin', 'TodoController@adminlogin')->name('curd.adminlogin');

Route::get('curd', 'CurdController@curd')->name('curd.curd');

//Route::get('insert', 'TodoController@insert')->name('curd.insert');

Route::post('in','CurdController@in')->name('curd.in');

Route::get('view_records','CurdController@disp')->name('curd.display');

//Route::get('edit/{id}','CurdController@show');

Route::post('edit/{id}','CurdController@edit')->name('user.edit');

Route::get('delete/{id}','CurdController@destroy'); 

//Route::post('Ed','CurdController@show')->name('user.edit'); 

//Todos Routes-End>middelware('auth')
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

