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


Route::get('/', 'FrontConteoller@index');
Route::get('/blog', 'FrontConteoller@blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
==============================================================================================
                                        About Route
==============================================================================================
*/

Route::get('/about/insert','AboutController@index');
Route::post('/about/insert', 'AboutController@save');
Route::get('/about/manage', 'AboutController@manage');
Route::get('/about/edit/{id}', 'AboutController@edit');
Route::post('/about/edit/', 'AboutController@update');
Route::get('/about/delete/{id}', 'AboutController@delete');