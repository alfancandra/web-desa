<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WargaController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Warga
Route::get('/warga', [WargaController::class, 'index'])->name('warga');
Route::get('/warga/add', [WargaController::class, 'add'])->name('addwarga');
Route::post('warga/store',[WargaController::class,'store'])->name('storewarga');
