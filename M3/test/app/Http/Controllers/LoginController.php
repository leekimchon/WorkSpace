<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }
    function store(LoginRequest $request){
        dd($request->all());
    }
}
