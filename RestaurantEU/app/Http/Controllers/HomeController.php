<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth'); //เพื่มความปลอดภัยให้web
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('auth/login');
    }
    public function managerHome()
    {
        $employees = DB::table('employee')->get();
        return view('manager/dashboard', compact('employees'));
    }

    public function chefHome()
    {
        $getorder = DB::table('order')->get();
        return view('chef/home', compact('getorder'));
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
