<?php

use App\Http\Controllers\Api\Deskcontroller;
use App\Http\Controllers\Api\StenaController;
use App\Http\Controllers\Api\UsersController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/desks',[Deskcontroller::class,'index']);

Route::get('/stena',[StenaController::class,'index']);

Route::get('/users',[UsersController::class,'index']);

Route::post('/stena',[StenaController::class,'store']);

Route::post('/desks',[DeskController::class,'store']);

Route::put('/stena',[StenaController::class,'update']);

Route::delete('/desks',[DeskController::class,'destroy']);

Route::delete('/stena',[StenaController::class,'destroy']);
