<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }
    public function registeruser(Request $req){
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password)
        ]);
        return view('auth.login');
    }
    public function loginuser(Request $req){
       if(Auth::attempt($req->only('name','password'))){
        return view('home.index');
       }
       return view('auth.login');
    }
    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
