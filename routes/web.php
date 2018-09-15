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
    return view('main_home');
});

Route::get('/business', function(){
		return view('business.business_details');
});

Route::get('/admin', function(){
		return view('admin.Home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
