<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.login', compact('request'));
    }

    public function authenticate(LoginRequest $request)
    {
        $input_login = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($input_login)) {
            $request->session()->regenerate();
            return redirect(route('home'));
        }
        dd(Auth::attempt($input_login));
        return redirect(route('login'))->flush('ログインに失敗しました');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
