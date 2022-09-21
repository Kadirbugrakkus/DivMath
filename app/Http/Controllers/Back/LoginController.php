<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view('backend.auth.login');
    }

    public function authPost(Request $request)
    {
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            toastr()->success('Tekrardan Hoşgeldiniz',Auth::user()->name);
        }
        {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->withErrors('E-Mail adresi veya şifre hatalı !');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
