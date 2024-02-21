<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthController extends Controller
{
    //GET Pages
    function registerForm() : View {
        return view('auth/register');
    }
    function loginForm() : View {
        return view('auth/login');
    }
    //POST method
    function register(Request $request) : RedirectResponse {
        $request->validate(
            [
                'username' =>'required|max:50',
                'email' =>'required|email',
                'password' => 'required',
            ],
            [
                'username.required' => 'กรุณากรอกชื่อผู้ใช้ของคุณให้ถูกต้อง',
                'username.max:50' => 'กรุณากรอกชื่อผู้ใช้ของคุณให้ถูกต้อง',
                'email.required' => 'กรุณากรอกอีเมลผู้ใช้ของคุณให้ถูกต้อง',
                'password.required' => 'กรุณากรอกรหัสผ่านของคุณให้ถูกต้อง',
            ]
        );
        $usernameExists = DB::table('employee')->where(
            'username', $request->username
        )->exists();
        if($usernameExists) {
            return redirect()->back()->withErrors([
                'username' => 'This username is already taken.'
            ]);
        } else {
            DB::table('employee')->insert([
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password
            ]);
            return redirect()->route('login');
        }
        // DB::table()->insert()
        // return to_route('home');
    }
    function login() {

    }
}
