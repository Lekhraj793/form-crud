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
Route::get('/','StudentController@index');
Route::get('/','StudentController@show');

Route::get('/form/insert','StudentController@index');
Route::post('/form', 'StudentController@store');

Route::get('/form/edit/{id}','StudentController@edit');
Route::post('/update','StudentController@update');

Route::get('/delete/{id}', 'StudentController@destroy');
Route::any('/form/edit','StudentController@search');

//search controller
Route::get('/search/auto','StudentController@auto');
Route::post('/search/auto/{mob}','StudentController@autocomplete');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
