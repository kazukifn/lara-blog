<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(LoginRequest $request)
    {
        if (Auth::attempt($request)) {
            $request->session()->regenerate();

            return redirect()->route('/');
        }

        return back()->withErrors([
            'email' => 'emailが一致しません。',
        ])->onlyInput('email');
    }
}
