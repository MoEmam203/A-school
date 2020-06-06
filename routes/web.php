<?php

use App\Http\Controllers\AdminController;
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
Route::post('/login','LoginController@postLogin')->name('post-login');
Route::get('logout', 'LoginController@logout');


// Showing Data
Route::get('/data','UserController@show')->name('data')->middleware('auth');

// subjects
Route::get('/study', 'ScheduleController@index')->name('study')->middleware('auth');

// Complaints
Route::get('/complaints', 'complaintsController@create')->name('create-complaint')->middleware('auth');
Route::post('/complaints', 'complaintsController@store')->name('store-complaint');

// Changing password
Route::get('change-password', 'ChangePasswordController@index')->middleware('auth');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

// Admin

// CRUD user
Route::get('/admin','AdminController@allstudents')->name('students')->middleware('admin','auth');
Route::get('/admin/parents', 'AdminController@allparents')->name('parents')->middleware('admin', 'auth');
Route::get('/admin/create', 'AdminController@create')->name('add-user')->middleware('admin', 'auth');
Route::post('/admin/store', 'AdminController@store')->name('store-user')->middleware('admin', 'auth');
Route::get('/admin/edit/{id}','AdminController@edit')->name('edit-user')->middleware('admin', 'auth');
Route::put('/admin/{id}','AdminController@update')->name('update-user')->middleware('admin', 'auth');
Route::delete('/admin/delete/{id}', 'AdminController@destroy')->name('destroy-user')->middleware('admin', 'auth');


// show & delete complaints
Route::get('/admin/complaints', 'ComplaintsController@all')->name('complaints')->middleware('admin', 'auth');
Route::delete('/admin/complaints/delete/{id}', 'ComplaintsController@destroy')->name('destroy-complaint')->middleware('admin', 'auth');


// CRUD subject
Route::get('/admin/subjects', 'SubjectController@all')->name('subjects')->middleware('admin', 'auth');
Route::get('/admin/subject/create', 'SubjectController@create')->name('add-subject')->middleware('admin', 'auth');
Route::post('/admin/subject/store', 'SubjectController@store')->name('store-subject')->middleware('admin', 'auth');
Route::get('/admin/subject/edit/{id}','SubjectController@edit')->name('edit-subject')->middleware('admin', 'auth');
Route::put('/admin/subject/{id}','SubjectController@update')->name('update-subject')->middleware('admin', 'auth');
Route::delete('/admin/subject/delete/{id}', 'SubjectController@destroy')->name('destroy-subject')->middleware('admin', 'auth');

// show & add schedule
Route::get('/admin/schedules', 'ScheduleController@all')->name('schedules')->middleware('admin', 'auth');
Route::get('/admin/schedule/create', 'ScheduleController@create')->name('add-schedule')->middleware('admin', 'auth');
Route::post('/admin/schedule/store', 'ScheduleController@store')->name('store-schedule')->middleware('admin', 'auth');