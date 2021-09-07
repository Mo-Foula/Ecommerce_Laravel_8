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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// VENDORS
//Create Vendor
Route::post('vendor/create',[\App\Http\Controllers\vendor\vendorController::class,'create']);
//Delete Vendor
Route::get('vendor/delete/{id}',[\App\Http\Controllers\vendor\vendorController::class,'destroy']);
//List Vendors
Route::get('vendor/list',[\App\Http\Controllers\vendor\vendorController::class,'list_vendors']);



