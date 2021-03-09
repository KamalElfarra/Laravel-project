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


Route::get('/admin', function () {
    return ('welcome admin');
});

Route::namespace('Front')->group(function (){

    //  name ويتم البحث عن الكونترول والدوال داخل الكونترول وعند الطباعة في المتصفح نضع فقط   front يتم الدخول الى الملف

    Route::get('/name','AdminController2@admin');

});
