<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswa;
use App\Http\Controllers\product;


/*
|-----------------------------------------------------------------------------------------------------------------------------------------------
| Web Routes------
|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------________________________--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------__________________________________________----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------________________----------------------------------------------------------
|______________-------plication. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/product/index/{id}/{nama}',[product::class,'index']);
Route::get('/product/show/{hai}',[product::class,'show']);
Route::get('/mahasiswa1', [mahasiswa::class, 'index']);
Route::get('/mahasiswa1/show',[mahasiswa::class,'show'])->name('mahasiswa.show');
Route::get('/mahasiswa1/create',[mahasiswa::class,'create'])->name('mahasiswa.create');
Route::post('/mahasiswa1/store',[mahasiswa::class,'store'])->name('mahasiswa.store');
Route::get('/mahasiswa1/index',[mahasiswa::class,'index'])->name('mahasiswa.index');
Route::get('/mahasiswa1/{id}/edit',[mahasiswa::class,'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa1/{id}/update',[mahasiswa::class,'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa1/{id}/destroy',[mahasiswa::class,'destroy'])->name('mahasiswa.destroy');

Route::get('/', function () {
    return view('baru');
});

// http://127.0.0.1:8000/test
route :: get('/test', function (){
    return view('welcome');
});
