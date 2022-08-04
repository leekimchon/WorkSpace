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

Route::post('/translate', function(\Illuminate\Http\Request $request){
    $arr = [
        'red' => 'đỏ',
        'blue' => 'Xanh dương',
        'yellow' => 'vàng'
    ];
    $sum = 0;
    foreach($arr as $key => $val){
        if($request->key == $key){
            $sum++;
            return view('true', ['val' => $val, 'key' => $key]);
        }
    }
    if($sum == 0){
        return view('false');
    }
});
Route::put('/translate', function(\Illuminate\Http\Request $request){
    $arr = [
        'red' => 'đỏ',
        'blue' => 'Xanh dương',
        'yellow' => 'vàng'
    ];
    $sum = 0;
    echo "1";
    foreach($arr as $key => $val){
        if($request->key == $key){
            $sum++;
            return view('true', ['val' => $val, 'key' => $key]);
        }
    }
    if($sum == 0){
        return view('false');
    }
});