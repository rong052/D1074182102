<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\CompanysController;
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
Route::get('companys',[CompanysController::class, 'index'])->name('companys.index');

//選定相同國家的公司
Route::post('companys/country', [CompanysController::class, 'country'])->name('companys.country');

//公司查詢
Route::get('companys/senior', [CompanysController::class, 'senior'])->name('companys.senior');

//新增公司表單
Route::get('companys/create', [CompanysController::class, 'create'])->name('companys.create');

//顯示單筆公司資料
Route::get('companys/{id}', [CompanysController::class, 'show'])->where('id' , '[0-9]+')->name('companys.show');;

//修改公司表單
Route::get('companys/{id}/edit', [CompanysController::class, 'edit'])->where('id' , '[0-9]+')->name('companys.edit');

//新增資料的網域名稱
Route::post('companys/store', [CompanysController::class, 'store'])->name('companys.store');

//修改資料
Route::patch('companys/update/{id}',[CompanysController::class, 'update'])->where('id' , '[0-9]+')->name('companys.update');

//刪除資料
Route::delete('companys/delete/{id}', [CompanysController::class, 'destroy'])->where('id' , '[0-9]+')->name('companys.destroy');



//檢視所有遊戲資料
Route::get('games', [GamesController::class, 'index'])->name('games.index');

//遊戲作品查詢
Route::get('games/senior', [GamesController::class, 'senior'])->name('games.senior');

//選定相同公司的遊戲作品
Route::post('games/company', [GamesController::class, 'company'])->name('games.company');

//新增遊戲表單
Route::get('games/create', [GamesController::class, 'create'])->name('games.create');

//顯示單筆遊戲資料
Route::get('games/{id}', [GamesController::class, 'show'])->where('id' , '[0-9]+')->name('games.show');

//修改遊戲表單
Route::get('games/{id}/edit', [GamesController::class, 'edit'])->where('id' , '[0-9]+')->name('games.edit');

//新增遊戲資料的網域名稱
Route::post('games/store', [GamesController::class, 'store'])->name('games.store');

//修改資料
Route::patch('games/update/{id}',[GamesController::class, 'update'])->where('id' , '[0-9]+')->name('games.update');


//刪除資料
Route::delete('games/delete/{id}', [GamesController::class, 'destroy'])->where('id' , '[0-9]+')->name('games.destroy');
