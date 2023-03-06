<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/home1', function () {
    return view('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');


Route::prefix('produk') -> group (function () {
    Route::get('/1', [ProdukController::class, 'index1']);
    Route::get('/2', [ProdukController::class, 'index2']);
}) -> name('produk');

Route::prefix('program') -> group (function () {
    Route::get('/1', [ProgramController::class, 'index1']);
    Route::get('/2', [ProgramController::class, 'index2']);
}) -> name('program');


Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/program', [ProgramController::class, 'index']);