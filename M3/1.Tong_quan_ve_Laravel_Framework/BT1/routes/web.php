<?php

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

Route::get('/index', function(){
    return view('index');
});

Route::post('/index', function(Illuminate\Http\Request $request){
    return view('result', 
        ['List_Price' => $request->List_Price, 
        'Discount_Percent' => $request->Discount_Percent, 
        'Discount_Amount' => $request->List_Price*$request->Discount_Percent
    ]);
});
