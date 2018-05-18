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

Route::get('/', 'StudentController@studentForm');

Route::get('/update/{id}', 'StudentController@updateStudent');

Route::get('/delete/{id}','StudentController@delete');

Route::post('/doInsert', 'StudentController@create');
Route::get('select','StudentController@select');

Route::post('doUpdate/{id}','StudentController@update');



//Route::get('update','StudentController@update');