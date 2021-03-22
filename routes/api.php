<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailAccountController;
use App\Http\Controllers\EtsyAccountController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//get new email for change
Route::post('/put_etsy_account',[EtsyAccountController::class,'putAccount']);

//get new email for change
Route::post('/put_email_account',[EmailAccountController::class,'putEmailAccount']);
//get new email for change
Route::post('/get_new_email',[EmailAccountController::class,'getNewEmail']);
//confirm change email when send request change email on etsy
Route::post('/confirm_changed_email',[EmailAccountController::class,'confirmChangedEmail']);
//confirm change email when click confirm change email on Mailbox
Route::post('/confirm_changed_email_complete',[EmailAccountController::class,'confirmChangedEmailComplete']);
