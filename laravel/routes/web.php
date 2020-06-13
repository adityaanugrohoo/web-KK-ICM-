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

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/', 'PagesController@home');

Route::get('/admin', 'StudentController@index');

Route::get('/admin/create', 'StudentController@create');
Route::get('/admin/{student}', 'StudentController@show');
Route::post('/admin', 'StudentController@store');
Route::delete('/admin/{std}', 'StudentController@destroy')->name('admin.destroy');
Route::get('/admin/{student}/edit', 'StudentController@edit');
Route::patch('/admin/{student}', 'StudentController@update');

// Route::resource('admin', 'StudentController');
