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
Route::get('companys',[companyscontroller::class, 'index'])->name('companys.index');

//新增公司表單
Route::get('companys/create', [companyscontroller::class, 'create'])->name('companys.create');
//顯示單筆公司資料
Route::get('companys/{id}', [companyscontroller::class, 'show'])->where('id' , '[0-9]+')->name('companys.show');;

//修改公司表單
Route::get('companys/{id}/edit', [companyscontroller::class, 'edit'])->where('id' , '[0-9]+')->name('companys.edit');

//新增資料的網域名稱
Route::post('companys/store', [companyscontroller::class, 'store'])->name('companys.store');

//修改資料
Route::patch('companys/update',[companyscontroller::class, ' update'])->name('companys.update');

//刪除資料
Route::delete('companys/delete/{id}', [companyscontroller::class, 'destroy'])->where('id' , '[0-9]+')->name('companys.destroy');




//檢視所有遊戲資料
Route::get('games', [gamescontroller::class, 'index'])->name('games.index');

//新增遊戲表單
Route::get('games/create', [gamescontroller::class, 'create'])->name('games.create');

//顯示單筆遊戲資料
Route::get('games/{id}', [gamescontroller::class, 'show'])->where('id' , '[0-9]+')->name('games.show');

//修改遊戲表單
Route::get('games/{id}/edit', [gamescontroller::class, 'edit'])->where('id' , '[0-9]+')->name('games.edit');

//新增遊戲資料的網域名稱
Route::post('games/store', [gamescontroller::class, 'store'])->name('games.store');

//修改資料
Route::patch('games/update/{id}',[gamescontroller::class, 'update'])->where('id' , '[0-9]+')->name('games.update');


//刪除資料
Route::delete('games/delete/{id}', [gamescontroller::class, 'destroy'])->where('id' , '[0-9]+')->name('games.destroy');
