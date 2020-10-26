<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
    protected $view = 'admin.';

    public function loginForm()
    {
        return view('admin.login');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function login(Request $request)
    {
        $this->validation($request);
        $input = $request->only('email', 'password');

        if($this->guard()->attempt($input, $request->filled('remember'))){
            return redirect()->route($this->view.'index');
        }

        return redirect()->back()->withErrors('Email or password incorrect');
    }

    public function validation(Request $request)
    {
        $request->validate([
            'email'     => 'required|email|max:50',
            'password'  => 'required|string'
        ]);
    }

    public function logout()
    {
        $this->guard()->logout();
        return redirect()->route('admin.login');
    }
}
