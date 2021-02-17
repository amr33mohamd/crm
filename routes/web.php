<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return;
// });

Route::get('/','App\Http\Controllers\Agent\LeadsController@index');
Route::get('/affiliate','App\Http\Controllers\Agent\AffiliateController@index');

Route::get('/login','App\Http\Controllers\Auth\UserController@login');
Route::get('/login_response','App\Http\Controllers\Auth\UserController@login_response');

Route::get('/register','App\Http\Controllers\Auth\UserController@register');
Route::get('/register_response','App\Http\Controllers\Auth\UserController@register_user');
