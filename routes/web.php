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

Route::get('/', 'FrontController@index')->name('index');

Route::get('aboutus', 'FrontController@aboutusView')->name('aboutus');

Route::get('events', 'FrontController@eventsView')->name('events');

Route::get('contactus', 'FrontController@contactusView')->name('contactus');

Route::get('admin', 'Dashboard\DashboardController@default')->name('admin.dashboard.index');

///////////////////////////////////////////API DATA////////////////////////////////////////////////////
Route::get('auth', 'Api\ApiController@auth')->name('auth');
///////////////////////////////////////////API DATA////////////////////////////////////////////////////

Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Auth\LoginController@login');
Route::get('admin/logout', 'Auth\LoginController@logout')->name('logout');


    

