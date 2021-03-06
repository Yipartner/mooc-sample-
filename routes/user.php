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

Route::post('/register', "UserController@register");
Route::post('/login', "UserController@login");
Route::post('/login/other', "UserController@loginForIdAndName");
Route::put('/resetpassword', "UserController@resetPassword")->middleware('token');
Route::get('/user', "UserController@userDetail")->middleware('token');
Route::put('/user', "UserController@editName")->middleware('token');
Route::put('/recharge', "UserController@addCoin")->middleware('token');
Route::put('/deductions', "UserController@delCoin")->middleware('token');
Route::get('/ttt', function () {
    return view('welcome');
})->middleware('teacher');