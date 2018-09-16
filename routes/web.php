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

Route::get('/', 'UserController@Home')->name('main-home');

//business Route Section
Route::get('/business', 'BusinessController@business_details')->name('business_details');
//register business owner
Route::get('/business/register_owner', 'BusinessController@register_owner')->name('register-owner');
Route::post('/business/process_owner', 'BusinessController@process_owner')->name('process-owner');
Route::get('/business/business_dashboard', 'BusinessController@business_dashboard')->name('business-dashboard');
Route::get('/business/register_business', 'BusinessController@register_business')->name('add-business');


//Admin Route Section
Route::get('/admin', 'AdminController@admin_dashboard')->name('admin-home');

Route::post('admin/admin_register', 'AdminController@admin_account')->name('admin-account');

//user Route Defination
//user registration route
Route::get("user/register", "UserController@user_register")->name("user_register");
Route::post("user/process_register", "UserController@process_register")->name("process-register");

//login route
Route::get("user/login", "UserController@user_login")->name("user_login");
Route::post("user/process_login", "UserController@process_login")->name("process_login");

Route::get('admin/admin_logout', 'UserController@admin_logout')->name('admin-logout');


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
