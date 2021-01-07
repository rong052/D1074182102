<?php

use App\Http\Controllers\AuthController;
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
Route::post('register',[AuthController::class,'register']);

Route::post('login',[AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    //查詢所有遊戲
    Route::get('games',[GamesController::class, 'games']);

    //修改指定遊戲
    Route::patch('games',[GamesController::class, 'update']);

    //刪除指定遊戲
    Route::delete('games', [GamesController::class,'delete']);

    //查詢所有遊戲
    Route::get('companys', [CompanysController::class,'companys']);

    //刪除指定遊戲
    Route::delete('companys', [CompanysController::class,'delete']);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
