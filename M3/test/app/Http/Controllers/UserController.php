<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function __construct()
    {
        
    }
    function login(){
        return view('users.login'); 
    }
    function postLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('register.profile');
        }else{
            return back()->withErrors([
                'err' => 'Tai khoan hoac mat khau khong dung',
            ])->onlyInput('err');
        }
    }
    function profile(){
        $user = Auth::user();
        // dd(Gate::forUser($user));
        if (Gate::forUser($user)->allows('edit-comment')) {
            echo "Người dùng này được phép chỉnh sửa comment";
        }else{
            echo "Người dùng này chưa đăng nhập";
        }
        return view('users.profile');
    }
    function register(){
        return view('users.register');
    }
    function store(RegisterRequest $request){

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->back();
    }
    function logout(){
        Auth::logout();
        return redirect()->route('login.login');
    }
}
