<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/coba', function () {
//     return view('coba');
// });

Route::get('/coba', [CobaController::class,'index']);


Route::get('/buku', [BukuController::class, 'index'])->name("buku");
Route::get('/create', [BukuController::class, 'create'])->name('create');
Route::post("/store", [BukuController::class, 'store'])->name('store');
Route::get('/buku/{buku}', [BukuController::class, 'edit'])->name('edit');
Route::put('/buku/{buku}', [BukuController::class, 'update'])->name('update');
Route::delete('/buku/{buku}', [BukuController::class, 'destroy'])->name('destroy');