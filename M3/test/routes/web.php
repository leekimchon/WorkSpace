<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::post('students', [StudentController::class, 'store'])->name('students.store');
Route::resource('books', BooksController::class);
Route::get('login', [UserController::class, 'login'])->name('login.login');
Route::post('login', [UserController::class, 'postLogin'])->name('login.postLogin');
Route::get('register', [UserController::class, 'register'])->name('register.register');
Route::post('register', [UserController::class, 'store'])->name('register.store');
Route::get('profile', [UserController::class, 'profile'])->name('register.profile')
    //->middleware('check.login')
;
Route::get('logout', [UserController::class, 'logout'])->name('register.logout');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
