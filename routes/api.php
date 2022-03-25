<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

    //announcements
    Route::get('/', [AnnouncementController::class, 'getAllAnnoucement']);
    //users
    Route::post('/storageUser', [UserController::class, 'storageUser']);
    //company
    Route::post('/storageCompany', [CompanyController::class, 'storageCompany']);
    
    
});

Route::prefix('auth')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    
});
