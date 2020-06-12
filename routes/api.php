<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Login & Logout
Route::get('/', 'Api\LoginController@index');
Route::post('/', 'Api\LoginController@post');
Route::get('/logout', 'Api\LoginController@logout');

// show data
Route::get('/data', 'Api\UserController@show');


// Study Schedule
Route::get('/data', 'Api\ScheduleController@study');

// Exam Schedule 
Route::get('/data', 'Api\ScheduleController@exam');


// Complaints
Route::post('/complaints', 'Api\ComplaintsController@store');

// change password 
Route::post('change-password', 'ChangePasswordController@store');

// result
Route::get('/result', 'Api\ResultController@index');


// Report

Route::get('/report', 'Api\ReportController@index');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
