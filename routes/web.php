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
Route::resource('companies', 'CompanyController');
Route::resource('components', 'ComponentController');
Route::resource('products', 'ProductController');


Route::get('users/password/change', 'UserController@showPasswordChangeForm');
Route::post('users/password/change', 'UserController@changePassword');

Route::get('component/{component}/image', 'ComponentController@showImage');

// image routes
Route::get('images/components/{component}', 'ComponentController@getImage');
