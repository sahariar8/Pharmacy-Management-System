<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Login()
    {
        return view('Auth.login');
    }

    public function LoginPost(Request $request)
    {

        if(Auth::attempt(['email'=> $request->email,'password'=> $request->password])){
            if(Auth::user()->role == 'admin'){
                return redirect(route('admin.dashboard'));
            }else{
                return redirect()->back()->with('error','Please Enter The Correct Credentials');
            }
        }else{
            return redirect()->back()->with('error','Please Enter The Correct Credentials');
        }
    }

    public function Register(){
        return view('Auth.register');
    }

    public function ForgetPassword()
    {
        return view('Auth.forgetPassword');
    }

    public function LogOut(Request $request)
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
