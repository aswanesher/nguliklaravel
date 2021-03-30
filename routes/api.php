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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('payment', 'Api\PaymentController@getPayment');
Route::post('payment/addpayment', 'Api\PaymentController@storePayment');
Route::put('payment/update/{id}', 'Api\PaymentController@updatePayment');
Route::delete('payment/delete/{id}', 'Api\PaymentController@deletePayment');
