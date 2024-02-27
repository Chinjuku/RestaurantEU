<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request) {
        $input = $request->all();

        $this->validate($request, 
        [
            'name' =>'required|min:3',
            'password' => 'required'
        ], 
        [
            'name.required' => 'กรุณากรอกชื่อผู้ใช้ของคุณ',
            'name.min' => 'กรุณากรอกชื่อผู้ใช้อย่างต่ำ 3 ตัวอักษร',
            'password.required' => 'กรุณากรอกรหัสผ่านของคุณ'
        ]);

        if (auth()->attempt(array('name' => $input['name'], 'password' => $input['password']))){
            if (auth()->user()->roles == 'manager') {
                return redirect()->route('manager.home');
            } 
            else if (auth()->user()->roles == 'chef') {
                return redirect()->route('chef.neworder');
            } 
            else if (auth()->user()->roles == 'cashier') {
                return redirect()->route('cashier.home');
            } 
            else if (auth()->user()->roles == 'waiter') {
                return redirect()->route('waiter.readytoserve');
            }

        } else {
            return redirect()->route('login')->with('error', 'Email และ Password ของคุณไม่ถูกต้อง');
        }
    }
}
