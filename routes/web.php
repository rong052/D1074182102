<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gamescontroller;
use App\Http\Controllers\companyscontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function (){
    return view('welcome');
});

//檢視所有公司資料
Route::get('companys',[companyscontroller::class, 'index']);

//新增公司表單
Route::get('companys/create', [companyscontroller::class, 'create']);
//顯示單筆公司資料
Route::get('companys/{id}', [companyscontroller::class, 'show'])->where('id' , '[0-9]+');

//修改公司表單
Route::get('companys/{id}/edit', [companyscontroller::class, 'edit'])->where('id' , '[0-9]+');




//檢視所有遊戲資料
Route::get('games', [gamescontroller::class, 'index'])->name('games.index');

//新增遊戲表單
Route::get('games/create', [gamescontroller::class, 'create']);

//顯示單筆遊戲資料
Route::get('games/{id}', [gamescontroller::class, 'show'])->where('id' , '[0-9]+');

//修改遊戲表單
Route::get('games/{id}/edit', [gamescontroller::class, 'edit'])->where('id' , '[0-9]+');

