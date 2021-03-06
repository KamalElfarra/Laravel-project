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

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Auth::routes(['verify'=>true]);

//لازم علشان توصل داخل الموقع تكون مسجل الإيميل والباسوورد وتكون متحقق من الإيميل

Route::get('login/{provider}', 'SocialController@redirect');

Route::get('login/{provider}/callback','SocialController@Callback');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/fillable','CrudController@get_data');

Route::get('/', function () {
    return view ('welcome');
});
Route::group(['prefix' => LaravelLocalization::setLocale(),	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function() {

Route::group(['prefix'=>'offers'],function (){

         Route::get("/create","CrudController@create");
         Route::any("/store","CrudController@store");

});


});
