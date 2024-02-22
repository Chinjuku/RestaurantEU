<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guest');
    }

    public function managerHome()
    {
        return view('manager/home');
    }

    public function chefHome()
    {
        return view('chef/home');
    }

    public function waiterHome()
    {
        return view('waiter/home');
    }
    
    public function cashierHome()
    {
        return view('cashier/home');
    }
}
