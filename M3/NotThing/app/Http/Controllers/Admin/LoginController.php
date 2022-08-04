<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login.index');
    }
    public function store( LoginRequest $request ){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credentials)){
            return 'da dang nhap';
        }else{
            return back()->withErrors([
                'err_login' => 'Tài khoản hoặc mật khẩu không đúng',
            ])->onlyInput('err_login');
        }
    }
}
