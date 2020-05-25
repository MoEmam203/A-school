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

Route::get('/', 'LoginController@index')->name('login');
Route::post('/','LoginController@postLogin')->name('post-login');
// Route::get('/info/{id}' , 'UserController@show')->name('info');

// Route::group(['prefix' => 'admin' , 'middleware'=>'admin'], function () {
    
//     Route::get('/admin','AdminController@index')->name('admin');



// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
