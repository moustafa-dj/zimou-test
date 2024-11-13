<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm() : Renderable
    {
        return view('Admin.auth.login');
    }

    public function index() : Renderable
    {
        return view('Admin.layouts.admin');
    }

    public function login(Request $request) : RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email' , 'password');

        if(Auth::guard('web')->attempt($credentials)){
            return redirect()->intended(route('admin.dashboard'));
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(){
        Auth::Guard('web')->logout();
        
        return redirect()->route('admin.login-form');
    }
}
