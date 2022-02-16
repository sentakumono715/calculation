<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateSheetController;

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

Route::middleware(['middleware'=>'api'])->group(function(){
    Route::get('/squared', [GenerateSheetController::class, 'index_Squared']);
    Route::get('/cube', [GenerateSheetController::class, 'index_box']);
    Route::get('/area_circle', [GenerateSheetController::class, 'index_Circle']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
