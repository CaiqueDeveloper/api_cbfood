<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\UserController;
use App\Models\Address;
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
    Route::get('/{id}/getAddressUser', [UserController::class, 'getAddressUser']);
    Route::get('/{id}/getUser', [UserController::class, 'getUser']);
    Route::put('/updateUser', [UserController::class, 'updateUser']);
    Route::put('/{id}/desableUser', [UserController::class, 'desableUser']);
    Route::put('/{id}/enableUser', [UserController::class, 'enableUser']);
    Route::delete('/{id}/deleteUser', [UserController::class, 'deleteUser']);
    Route::put('/updatePassword', [UserController::class, 'updatePassword']);

    //company
    Route::post('/storageCompany', [CompanyController::class, 'storageCompany']);
    Route::get('/{id}/getCompany', [CompanyController::class, 'getCompany']);
    Route::put('/updateCompany', [CompanyController::class, 'updateCompany']);
    //address
    Route::post('/storageAddressUser', [AddressController::class, 'storageAddressUser']);
    Route::post('/storageAddressCompany', [AddressController::class, 'storageAddressCompany']);

    //image
    Route::post('/storagePictureProfileUser', [ImagesController::class, 'storagePictureProfileUser']);
    
    
});

Route::prefix('auth')->group(function(){
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    
});
