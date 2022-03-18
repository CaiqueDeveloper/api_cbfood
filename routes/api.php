<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\auth\AuthController;
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

Route::middleware('auth:api')->group(function () {
    Route::get('/', [AnnouncementController::class, 'getAllAnnoucement']);
});

Route::prefix('auth')->group(function(){
    
    Route::get('/login', [AuthController::class, 'login'])->name('login');
});