<?php

use App\Http\Controllers\Api\V1\LibroController;
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

Route::get('libro',[LibroController::class,'index']);
Route::post('libro',[LibroController::class,'store']);
Route::get('libro/{libro}',[LibroController::class,'show']);
Route::put('libro/{libro}',[LibroController::class,'update']);
Route::delete('libro/{libro}',[LibroController::class,'destroy']);