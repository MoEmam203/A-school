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

// Study Schedule
Route::get('/study', 'ScheduleController@index')->name('study')->middleware('auth');

// Exam Schedule
Route::get('/exam/study', 'ExamScheduleController@index')->name('exam-table')->middleware('auth');

// Complaints
Route::get('/complaints', 'complaintsController@create')->name('create-complaint')->middleware('auth');
Route::post('/complaints', 'complaintsController@store')->name('store-complaint');

// Changing password
Route::get('change-password', 'ChangePasswordController@index')->middleware('auth');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

// results 
Route::get('/result', 'ResultController@index')->name('term')->middleware('auth');
Route::get('/result/all', 'ResultController@all')->name('general')->middleware('auth');


// Admin

Route::group(['prefix' => 'admin','middleware' => 'auth','admin'], function () {
    // CRUD user
    Route::get('/', 'AdminController@allstudents')->name('students');
    Route::get('/parents', 'AdminController@allparents')->name('parents');
    Route::get('/create', 'AdminController@create')->name('add-user');
    Route::post('/store', 'AdminController@store')->name('store-user');
    Route::get('/edit/{id}', 'AdminController@edit')->name('edit-user');
    Route::put('/{id}', 'AdminController@update')->name('update-user');
    Route::delete('/delete/{id}', 'AdminController@destroy')->name('destroy-user');
    Route::get('/allinfo/{id}', 'AdminController@allinfo')->name('all-info');

    // show & delete complaints
    Route::get('/complaints', 'ComplaintsController@all')->name('complaints');
    Route::delete('/complaints/delete/{id}', 'ComplaintsController@destroy')->name('destroy-complaint');


    // CRUD subject
    Route::get('/subjects', 'SubjectController@all')->name('subjects');
    Route::get('/subject/create', 'SubjectController@create')->name('add-subject');
    Route::post('/subject/store', 'SubjectController@store')->name('store-subject');
    Route::get('/subject/edit/{id}', 'SubjectController@edit')->name('edit-subject') ;
    Route::put('/subject/{id}', 'SubjectController@update')->name('update-subject') ;
    Route::delete('/subject/delete/{id}', 'SubjectController@destroy')->name('destroy-subject') ;

    // show & add study schedule
    Route::get('/schedules', 'ScheduleController@all')->name('schedules') ;
    Route::get('/schedule/create', 'ScheduleController@create')->name('add-schedule') ;
    Route::post('/schedule/store', 'ScheduleController@store')->name('store-schedule') ;
    // show & add exams schedule
    Route::get('/exams/schedules', 'ExamScheduleController@all')->name('exam-schedules') ;
    Route::get('/exam/shedule/create', 'ExamScheduleController@create')->name('add-exam-schedule') ;
    Route::post('/exam/schedule/store', 'ExamScheduleController@store')->name('store-exam-schedule') ;

    // add result
    Route::get('/result/create', 'ResultController@create')->name('add-result');
    Route::post('/result/store', 'ResultController@store')->name('store-result');
});