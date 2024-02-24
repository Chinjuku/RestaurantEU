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
        return view('chef/home');
    }

    public function waiterHome()
    {
        $reservations = DB::table('reservation')->get();
        return view('waiter/home', compact('reservations'));
    }

    public function cashierHome()
    {
        $reservations = DB::table('reservation')->get();
        return view('cashier/home', compact('reservations'));
    }
}
