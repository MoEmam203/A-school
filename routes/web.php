<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;



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
// Login & Logout
Route::get('/', 'LoginController@index')->name('login');
Route::post('/','LoginController@postLogin')->name('post-login');
Route::get('logout', 'LoginController@logout');


// Showing Data
Route::get('/data','UserController@show')->name('data')->middleware('auth');

// Complaints
Route::get('/complaints', 'complaintsController@create')->name('create-complaint')->middleware('auth');
Route::post('/complaints', 'complaintsController@store')->name('store-complaint');

// Changing password
Route::get('change-password', 'ChangePasswordController@index')->middleware('auth');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

// Admin
Route::get('/admin',function(){
    echo 'hi admin';
})->middleware('admin','auth');


