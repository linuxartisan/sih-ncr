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

// Auth::routes();
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Controller routes
 */
Route::resource('users', 'UserController');

// charts
Route::get('examples/charts', function()	{
	return view('examples.charts.morris');
});

Route::get('users/password/change', 'UserController@showPasswordChangeForm');
Route::post('users/password/change', 'UserController@changePassword');
