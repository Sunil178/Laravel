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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('show_create/', "myController@showHello");
Route::post('create/', "myController@insertData");
Route::get('/', "myController@showData")->name("show_detail");
Route::get('remove/{id}', "myController@deleteData");
Route::post('update/{id}', "myController@updateData");
Route::get('show_update/{id}', "myController@showUpdate");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
