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
        return view('manager/dashboard');
    }

    public function chefHome()
    {
        $getorder = DB::table('order')->get();
        return view('chef/neworder', compact('getorder'));
    }

    public function waiterHome()
    {
        DB::table('orderdetails')->where('order_status', 'serving')->get();
        return view('waiter/readytoserve');
    }

    public function cashierHome()
    {
        return view('cashier/home');
    }
}
