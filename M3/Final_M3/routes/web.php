<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BookController::class, 'index'])->name('index');
Route::get('/create', [BookController::class, 'create'])->name('create');
Route::post('/store', [BookController::class, 'store'])->name('store');
Route::get('/edit/{id}', [BookController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [BookController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [BookController::class, 'destroy'])->name('destroy');
