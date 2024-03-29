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

Route::post('login', 'UserController@login');

Route::group(['middleware' => ['jwt.auth']], function() {
    Route::get('payment-category', 'PaymentCategoryController@index');
    Route::get('payment-code', 'PaymentCodeController@index');
    Route::get('payment', 'PaymentController@index');
    Route::resource('expense-posted', 'ExpensePostedController');
});
