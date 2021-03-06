<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view("backend.auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->only("email", "password");
        if (Auth::attempt($data)) {
           dd("Login Successful");
        }else{
            dd("Login fail");
        }
    }

    public function logout()
    {
        \Illuminate\Support\Facades\Session::flush();
        Auth::logout();
        return redirect()->route("admin.showFormLogin");
    }

}
