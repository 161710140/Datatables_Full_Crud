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
Route::get('bs', function () {
    return view('Bs');
});
Route::get('api/Data', 'DataOrangController@apiData')->name('api.Data');
Route::resource('table', 'DataOrangController');
Route::get('/pdf','DataOrangController@exportdata')->name('pdf');
// Route::resource('contact', 'ContactController');
// Route::get('api/contact', 'ContactController@apiContact')->name('api.contact');
Auth::routes();
// Route::get('/user/json','DataOrangController@Action')->name('Action');
// Route::post('auuuuu', 'DataOrangController@store')->name('store');
// Route::post('aa', 'DataOrangController@update')->name('update');
// Route::get('aaa', 'DataOrangController@fetchdata')->name('fetch');
// Route::post('Create', 'DataOrangController@destroy')->name('destroy');
// Route::get('Creaste', 'DataOrangController@removedata')->name('remove');
Route::get('/home', 'HomeController@index')->name('home');
