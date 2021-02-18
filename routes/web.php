<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return;
// });

Route::get('/','App\Http\Controllers\Agent\LeadsController@index');
Route::get('/affiliate','App\Http\Controllers\Agent\AffiliateController@index');

Route::get('/login','App\Http\Controllers\Auth\UserController@login');
Route::get('/login_response','App\Http\Controllers\Auth\UserController@login_response');

Route::get('/register','App\Http\Controllers\Auth\UserController@register');
Route::get('/register_response','App\Http\Controllers\Auth\UserController@register_user');

Route::get('/billing-portal', function (Request $request) {
    return Auth::user()->redirectToBillingPortal();
});
Auth::routes();

Route::get('/portal', 'App\Http\Controllers\PaymentController@portal')->name('portal');
Route::get('/oauth', 'App\Http\Controllers\OauthController@index')->name('oauth');
Route::resource('/payment_methods', 'App\Http\Controllers\PaymentMethodController');
Route::get('/subscribe/{price_id}', 'App\Http\Controllers\SubscribeController@subscribe')->name('subscribe');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
