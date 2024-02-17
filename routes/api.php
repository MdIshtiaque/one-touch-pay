<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AppRegisterController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['api.secret'])->group(function () {
    Route::post('app-register', [AppRegisterController::class, 'appRegister']);
    Route::put('app-update', [AppRegisterController::class, 'appEdit'])->middleware('app.key');

    Route::get('application', [ApplicationController::class, 'getApplication'])->middleware('app.key');
    Route::delete('application', [ApplicationController::class, 'deleteApplication'])->middleware('app.key');
    /**
     *
     * Transaction Api routes
     */
    Route::post('transaction', [TransactionController::class, 'transaction'])->middleware('app.key');
    Route::get('update-status/{tranId}', [TransactionController::class, 'UpdateStatus'])->middleware('app.key');
});
