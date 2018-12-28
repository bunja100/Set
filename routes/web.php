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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');

Route::get('patient/register', 'HomeController@register')->name('register');
Route::get('patient/display', 'HomeController@display')->name('display');
/*Route::get('display', function () {
    return view('display');
});*/


Route::resource('forms', 'FormController');
//Route::resource('patient', 'HomeController')
Route::post('patient/save', 'HomeController@save')->name('save');

Route::get('patient/print/{id}','HomeController@print')->name('print');

Route::get('patient/create','HomeController@create')->name('create');
Route::get('/patient/{id}', 'HomeController@details')->name('patient');
Route::post('patient/update', 'HomeController@update')->name('update');
