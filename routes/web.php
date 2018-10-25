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

Route::get('/register', 'HomeController@register')->name('register');
Route::get('display', 'HomeController@display')->name('display');
/*Route::get('display', function () {
    return view('display');
});*/


Route::resource('forms', 'FormController');
Route::post('/save', 'HomeController@save')->name('save');

Route::get('/create','HomeController@create')->name('create');
Route::get('/details', 'HomeController@details')->name('details');