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
Auth::routes(['verify'=>true]);

//لازم علشان توصل داخل الموقع تكون مسجل الإيميل والباسوورد وتكون متحقق من الإيميل

Route::get('login/{provider}', 'SocialController@redirect');

Route::get('login/{provider}/callback','SocialController@Callback');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::get('/', function () {
    return view ('welcome');
});

