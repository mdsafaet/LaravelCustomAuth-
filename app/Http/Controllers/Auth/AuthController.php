<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('auth.registration');
    }
    public function postregistration(Request $request)
    {
       dd($request->all());
    }
   




    public function logout()
    {   Session::flush();
        Auth::logout();
        return redirect('login');
    }
   
}

